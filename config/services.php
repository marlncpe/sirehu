<?php

	use \Phalcon\Mvc\Url as Url,
		\Phalcon\Session\Adapter\Files as Files;
		
	/**
	 * The URL component is used to generate all kind of urls in the application
	 */
	$di->set('url', function() {
		$url = new Url();
		$url->setBaseUri('/sirehu/');
		return $url;
	});

	/**
	 * Start the session the first time some component request the session service
	 */
	$di->set('session', function() {
		$session = new Files();
		$session->start();
		return $session;
	});
