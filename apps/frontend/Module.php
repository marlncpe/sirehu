<?php

namespace Sirehu\Frontend;

use \Phalcon\Mvc\View as View,
	\Phalcon\Mvc\View\Engine\Volt as VoltEngine,
	\Phalcon\Loader as Loader,
	\Phalcon\Mvc\Dispatcher as Dispatcher,
	\Phalcon\Db\Adapter\Pdo\Mysql as Mysql;

class Module
{

	public function registerAutoloaders()
	{
		//$eventsManager = new \Phalcon\Events\Manager();
		$loader = new Loader();

		$loader->registerNamespaces(array(
			'Sirehu\Frontend\Controllers' => __DIR__ . '/controllers/',
			'Sirehu\Frontend\Models' => __DIR__ . '/models/',
			'Sirehu\Core\Models' => dirname(__DIR__) .'/core/models',
			'Sirehu\Blog\Models' => dirname(__DIR__) .'/blog/models',
		));

/*
		//Listen all the loader events
		$eventsManager->attach('loader', function($event, $loader) {
		    if ($event->getType() == 'beforeCheckPath') {
		        echo $loader->getCheckedPath();
		    }
		});

		$loader->setEventsManager($eventsManager);
*/
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
			$dispatcher->setDefaultNamespace("Sirehu\Frontend\Controllers");
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
			return new Mysql(array(
				"host" => $config->database->host,
				"username" => $config->database->username,
				"password" => $config->database->password,
				"dbname" => $config->database->dbname
			));
		});

	}

}
