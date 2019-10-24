<?php
    require_once 'core/init.php';

    $username = $_POST['inputUsername'];
    $password = $_POST['inputPassword'];

    $user = new User;
    $user->loginUser($username, $password);

    if ($user->loggedIn() == 1) {
        Redirect::goto('index.php');
    }else{
        //Redirect::goto('login.html');
        echo "Something went wrong: " . $user->loggedIn();
    }
?>