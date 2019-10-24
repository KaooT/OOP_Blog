<?php
    require_once 'core/init.php';

    if (!isset($_SESSION['login'])) {
        Redirect::goto('login.html');
    }

?>