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

		$router->add("/blog/search", array(
			'module' => 'blog',
			'controller' => 'posts',
			'action' => 'index',
		));

		$router->add("/blog/post", array(
			'module' => 'blog',
			'controller' => 'posts',
			'action' => 'searchid',
		));

		$router->add("/blog/category", array(
			'module' => 'blog',
			'controller' => 'posts',
			'action' => 'categoryid',
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
		//Begin Departments
		$router->add("/cpanel/departments", array(
			'module' => 'cpanel',
			'controller' => 'departments',
			'action' => 'index',
		));
		$router->add("/cpanel/departments/add", array(
			'module' => 'cpanel',
			'controller' => 'departments',
			'action' => 'new',
		));
		$router->add("/cpanel/departments/create", array(
			'module' => 'cpanel',
			'controller' => 'departments',
			'action' => 'create',
		));
		$router->add("/cpanel/departments/search", array(
			'module' => 'cpanel',
			'controller' => 'departments',
			'action' => 'search',
		));
		$router->add("/cpanel/departments/edit", array(
			'module' => 'cpanel',
			'controller' => 'departments',
			'action' => 'edit',
		));
		$router->add("/cpanel/departments/update", array(
			'module' => 'cpanel',
			'controller' => 'departments',
			'action' => 'save',
		));
		$router->add("/cpanel/departments/delete", array(
			'module' => 'cpanel',
			'controller' => 'departments',
			'action' => 'delete',
		));
		
		//End Departments
		/*
		*Routers Frontend
		*/
		$router->add("/", array(
			'module' => 'frontend',
			'controller' => 'index',
			'action' => 'index',
		));
		$router->add("/subscribers", array(
			'module' => 'frontend',
			'controller' => 'subscribers',
			'action' => 'create',
		));
		$router->add("/coordinations", array(
			'module' => 'frontend',
			'controller' => 'coordinations',
			'action' => 'search',
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
