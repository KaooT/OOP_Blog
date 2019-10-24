<?php

	/**
	* User class
	* 
	* Contains all user interaction functions, like registering new users, loggin in and out, changing password etc.
	* 
	*/
	Class User {

		private $pdoConnect,
				$loggedInOK = false;

		public function __construct() {
			try {
				$this->pdoConnect = new PDO('mysql:host=' . Config::get('database/host') . ';dbname=' . Config::get('database/db'), Config::get('database/username'), Config::get('database/password'));
			} catch(PDOException $pe) {
				die($pe->getMessage());
			}
		}

		public function loggedIn() {
			return $this->loggedInOK;
		}

		public function loginUser($username, $password) {
			$sql = $this->pdoConnect->prepare('SELECT username, password, role FROM users WHERE username = ?');
			$sql->execute(array($username));
			$pwd = $sql->fetch();
			if ($pwd['password']) {
				if ($pwd['password'] == $password) {
					$_SESSION['login'] = 'OK';
					$_SESSION['username'] = $pwd['username'];
					$_SESSION['role'] = $pwd['role'];
					$this->loggedInOK = true;
				}else{
					$this->loggedInOK = 'Incorrect username or password';
				}
			}else{
				$this->loggedInOK = 'Incorrect username or password';
			}
		}

		public function logoutUser() {
			unset($_SESSION['login']);
			unset($_SESSION['username']);
			Redirect::goto('index.php');
		}

	}

?>