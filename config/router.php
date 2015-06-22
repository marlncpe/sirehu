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
		//Begin Departments Information
		$router->add("/cpanel/departments/information/add", array(
			'module' => 'cpanel',
			'controller' => 'departments_info',
			'action' => 'new',
		));
		$router->add("/cpanel/departments/information/create", array(
			'module' => 'cpanel',
			'controller' => 'departments_info',
			'action' => 'create',
		));
		$router->add("/cpanel/departments/information/edit", array(
			'module' => 'cpanel',
			'controller' => 'departments_info',
			'action' => 'edit',
		));
		$router->add("/cpanel/departments/information/update", array(
			'module' => 'cpanel',
			'controller' => 'departments_info',
			'action' => 'save',
		));
		$router->add("/cpanel/departments/information/delete", array(
			'module' => 'cpanel',
			'controller' => 'departments_info',
			'action' => 'delete',
		));
		//End Departments Information
		//End Departments
		//Begin Charges
		$router->add("/cpanel/charges", array(
			'module' => 'cpanel',
			'controller' => 'charges',
			'action' => 'index',
		));
		$router->add("/cpanel/charges/add", array(
			'module' => 'cpanel',
			'controller' => 'charges',
			'action' => 'new',
		));
		$router->add("/cpanel/charges/create", array(
			'module' => 'cpanel',
			'controller' => 'charges',
			'action' => 'create',
		));
		$router->add("/cpanel/charges/search", array(
			'module' => 'cpanel',
			'controller' => 'charges',
			'action' => 'search',
		));
		$router->add("/cpanel/charges/edit", array(
			'module' => 'cpanel',
			'controller' => 'charges',
			'action' => 'edit',
		));
		$router->add("/cpanel/charges/update", array(
			'module' => 'cpanel',
			'controller' => 'charges',
			'action' => 'save',
		));
		$router->add("/cpanel/charges/delete", array(
			'module' => 'cpanel',
			'controller' => 'charges',
			'action' => 'delete',
		));
		//End Charges
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
