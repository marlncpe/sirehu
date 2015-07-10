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
		//Begin Administration Blog
		$router->add("/cpanel/blog", array(
			'module' => 'cpanel',
			'controller' => 'blog_posts',
			'action' => 'index',
		));
		$router->add("/cpanel/blog/posts/add", array(
			'module' => 'cpanel',
			'controller' => 'blog_posts',
			'action' => 'new',
		));
		$router->add("/cpanel/blog/posts/create", array(
			'module' => 'cpanel',
			'controller' => 'blog_posts',
			'action' => 'create',
		));
		$router->add("/cpanel/blog/posts/search", array(
			'module' => 'cpanel',
			'controller' => 'blog_posts',
			'action' => 'search',
		));
		$router->add("/cpanel/blog/posts/edit", array(
			'module' => 'cpanel',
			'controller' => 'blog_posts',
			'action' => 'edit',
		));
		$router->add("/cpanel/blog/posts/update", array(
			'module' => 'cpanel',
			'controller' => 'blog_posts',
			'action' => 'save',
		));
		$router->add("/cpanel/blog/posts/delete", array(
			'module' => 'cpanel',
			'controller' => 'blog_posts',
			'action' => 'delete',
		));
		//End Administration Blog
		//Begin Administration Users
		$router->add("/cpanel/users", array(
			'module' => 'cpanel',
			'controller' => 'users',
			'action' => 'index',
		));
		$router->add("/cpanel/users/add", array(
			'module' => 'cpanel',
			'controller' => 'users',
			'action' => 'new',
		));
		$router->add("/cpanel/users/create", array(
			'module' => 'cpanel',
			'controller' => 'users',
			'action' => 'create',
		));
		$router->add("/cpanel/users/search", array(
			'module' => 'cpanel',
			'controller' => 'users',
			'action' => 'search',
		));
		$router->add("/cpanel/users/edit", array(
			'module' => 'cpanel',
			'controller' => 'users',
			'action' => 'edit',
		));
		$router->add("/cpanel/users/update", array(
			'module' => 'cpanel',
			'controller' => 'users',
			'action' => 'save',
		));
		$router->add("/cpanel/users/delete", array(
			'module' => 'cpanel',
			'controller' => 'users',
			'action' => 'delete',
		));
		//End Administration  Users
		/*
		End Cpanel
		*/
		/*
		Begin Recepcion
		*/
		$router->add("/documents", array(
			'module' => 'recepcion',
			'controller' => 'documents',
			'action' => 'index',
		));
		$router->add("/documents/add", array(
			'module' => 'recepcion',
			'controller' => 'documents',
			'action' => 'new',
		));
		$router->add("/documents/create", array(
			'module' => 'recepcion',
			'controller' => 'documents',
			'action' => 'create',
		));
		$router->add("/documents/search", array(
			'module' => 'recepcion',
			'controller' => 'documents',
			'action' => 'search',
		));
		$router->add("/documents/edit", array(
			'module' => 'recepcion',
			'controller' => 'documents',
			'action' => 'edit',
		));
		$router->add("/documents/update", array(
			'module' => 'recepcion',
			'controller' => 'documents',
			'action' => 'save',
		));
		$router->add("/documents/delete", array(
			'module' => 'recepcion',
			'controller' => 'documents',
			'action' => 'delete',
		));
		/*
		End Recepcion
		*/
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
