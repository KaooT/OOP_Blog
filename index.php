<?php
	require_once 'core/init.php';

	$user = new User;

	if ($user->loggedIn()) {
		echo "You have succesfully logged in.";
	}
?>