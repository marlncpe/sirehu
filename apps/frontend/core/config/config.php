<?php

return new \Phalcon\Config(array(
	'database' => array(
		'adapter'  => 'Mysql',
		'host'     => 'localhost',
		'username' => 'root',
		'password' => '123456',
		'dbname'     => 'sirehu'
	),
	'application' => array(
		'controllersDir' => __DIR__.'/../controllers/',
		'modelsDir' => __DIR__.'/../models/',
		'viewsDir' => __DIR__.'/../views/'
	)
));
