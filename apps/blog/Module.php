<?php

namespace Sirehu\Blog;

use \Phalcon\Mvc\View as View,
	\Phalcon\Mvc\View\Engine\Volt as VoltEngine,
	\Phalcon\Loader as Loader,
	\Phalcon\Mvc\Dispatcher as Dispatcher,
	\Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;


class Module
{

	public function registerAutoloaders()
	{

		$loader = new Loader();

		$loader->registerNamespaces(array(
			'Sirehu\Blog\Controllers' => __DIR__ . '/controllers/',
			'Sirehu\Blog\Models' => __DIR__ . '/models/',
			'Sirehu\Core\Models' => dirname(__DIR__) .'/core/models',
		));

		$loader->register();
	}

	public function registerServices($di)
	{

		/**
		 * Read configuration
		 */
		$config = include __DIR__ . "/config/config.php";

		$di['dispatcher'] = function() {
			$dispatcher = new Dispatcher();
			$dispatcher->setDefaultNamespace("Sirehu\Blog\Controllers");
			return $dispatcher;
		};

		/**
		 * Setting up the view component
		 */
		$di->set('view', function() use ($config) {
			$view = new View();
			$view->setViewsDir($config->application->viewsDir);
			$view->registerEngines(array(
				'.volt' => function ($view, $di){
		            $volt = new VoltEngine($view, $di);
				    $volt->setOptions(array(
				    	'compiledPath' => '../cache/',
				    	'compiledSeparator' => '_',
				        'compiledExtension' => '.compiled',
				        'compileAlways' => true
				    ));

				    return $volt;
		        },
		        '.phtml' => 'Phalcon\Mvc\View\Engine\Php'
			));
			return $view;
		});
		/**
		 * Database connection is created based in the parameters defined in the configuration file
		 */
		$di->set('db', function() use ($config) {
			return new DbAdapter(array(
				"host" => $config->database->host,
				"username" => $config->database->username,
				"password" => $config->database->password,
				"dbname" => $config->database->dbname,
				"charset"      => "utf8"
			));
		});

	}

}
