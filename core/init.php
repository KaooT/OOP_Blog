<?php
	session_start();

	$GLOBALS['config'] = array(
		'database' => array(
			'host' => 'localhost',
			'username' => 'user',
			'password' => '8ZJPsWYOVyobfAi1',
			'db' => 'kaoot_blog'
		)
	);

	spl_autoload_register(function($class) {
		require_once 'classes/'. $class . '.php';
	});

?>