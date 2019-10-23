<?php
	/**
	* User class
	* 
	* Contains all user interaction functions, like creating, deleting and altering users, loggin in and out etc
	* 
	*/
	Class User {

		private $pdoConnect,
				$dbParams,
				$loggedIn = false;

		public function __construct() {
			try {
				$this->pdoConnect = new PDO('mysql:host=' . Config::get('database/host') . ';dbname=' . Config::get('database/db'), Config::get('database/username'), Config::get('database/password'));
			} catch(PDOException $pe) {
				die($pe->getMessage());
			}

			$this->loggedIn = true;
		}

		public function loggedIn() {
			return $this->loggedIn;
		}

	}

?>