<?php

$application->registerModules(array(
	'becas' => array(
		'className' => 'Sirehu\Becas\Module',
		'path' => '../apps/becas/Module.php'
	),
	'blog' => array(
		'className' => 'Sirehu\Blog\Module',
		'path' => '../apps/blog/Module.php'
	),
	'core' => array(
		'className' => 'Sirehu\Core\Module',
		'path' => '../apps/core/Module.php',
		'shared' => true
	),
	'cpanel' => array(
		'className' => 'Sirehu\Cpanel\Module',
		'path' => '../apps/cpanel/Module.php'
	),
	'frontend' => array(
		'className' => 'Sirehu\Frontend\Module',
		'path' => '../apps/frontend/Module.php'
	),
	'odontologia' => array(
		'className' => 'Sirehu\Odontologia\Module',
		'path' => '../apps/odontologia/Module.php'
	),
	'servimed' => array(
		'className' => 'Sirehu\Servimed\Module',
		'path' => '../apps/servimed/Module.php'
	),
	'usuarios' => array(
		'className' => 'Sirehu\Users\Module',
		'path' => '../apps/users/Module.php'
	),
	'recepcion' => array(
		'className' => 'Sirehu\Recepcion\Module',
		'path' => '../apps/recepcion/Module.php'
	),
));