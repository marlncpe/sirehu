<?php

error_reporting(E_ALL);
use \Phalcon\DI\FactoryDefault as FactoryDefault,
	\Phalcon\Mvc\Application as Application;

try {

	/**
	 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
	 */
	$di = new FactoryDefault();

	require __DIR__ . '/../config/router.php';
	require __DIR__ . '/../config/services.php';
	/**
	 * Handle the request
	 */
	$application = new Application();

	$application->setDI($di);

	/**
	 * Include modules
	 */
	require __DIR__ . '/../config/modules.php';
	
	/**
	* Register application modules
	*/

	echo $application->handle()->getContent();

} catch (Phalcon\Exception $e) {
	echo $e->getMessage();
} catch (PDOException $e){
	echo $e->getMessage();
}