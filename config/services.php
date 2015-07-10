<?php

	use \Phalcon\Mvc\Url as Url,
		\Phalcon\Session\Adapter\Files as Files,
		\Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter,
		\Phalcon\Session\Adapter\Files as SessionAdapter;
		
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
	/**
	 * If the configuration specify the use of metadata adapter use it or use memory otherwise
	 */
	$di->set('modelsMetadata', function () {
	    return new MetaDataAdapter();
	});
	/**
	* Register the flash service with custom CSS classes
	*/
	$di->set('flash', function()
	{
	    return new Phalcon\Flash\Direct(array(
	        'error' => 'alert alert-danger',
	        'success' => 'alert alert-success',
	        'notice' => 'alert alert-info'
	        )
	    );
	});
	