<?php
	use \Phalcon\Mvc\Router as Router;
	/**
	 * Registering a router
	 */
	$di->set('router', function() {
		$router = new Router();

		$router->setDefaultModule("frontend");
		
		/*
		*Routers Becas
		*/
		$router->add("/becas", array(
			'module' => 'becas',
			'controller' => 'index',
			'action' => 'index',
		));
		/*
		*Routers Blogs
		*/
		$router->add("/blog", array(
			'module' => 'blog',
			'controller' => 'posts',
			'action' => 'index',
		));
		/*
		*Routers Core
		*/
		$router->add("/core", array(
			'module' => 'core',
			'controller' => 'index',
			'action' => 'index',
		));
		/*
		*Routers Cpanel 
		*/
		$router->add("/cpanel", array(
			'module' => 'cpanel',
			'controller' => 'index',
			'action' => 'index',
		));
		/*
		*Routers Frontend
		*/
		$router->add("/", array(
			'module' => 'frontend',
			'controller' => 'index',
			'action' => 'index',
		));
		/*
		*Routers Galeria 
		*/
		$router->add("/galeria", array(
			'module' => 'galeria',
			'controller' => 'index',
			'action' => 'index',
		));
		/*
		*Routers Odontologia 
		*/
		$router->add("/odontologia", array(
			'module' => 'odontologia',
			'controller' => 'index',
			'action' => 'index',
		));
		/*
		*Routers Servimed
		*/
		$router->add("/servimed", array(
			'module' => 'servimed',
			'controller' => 'index',
			'action' => 'index',
		));
		/*
		*Routers Users
		*/
		$router->add("/users", array(
			'module' => 'usuarios',
			'controller' => 'index',
			'action' => 'index',
		));

		return $router;
	});
