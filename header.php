<?php

    require_once 'core/init.php';
    require_once 'core/checksession.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>
    <div class="main-menu">
         <ul>
              <li class="left"><a href="blog.php">Blog</a></li>
              <li class="left"><a href="news.php">News</a></li>
              <li class="right"><a href="logout.php">Log out</a></li>
              <?php
                if ($_SESSION['role'] == 'admin') {
                  ?>
                    <li class="right"><a href="addentry.php">New entry</a></li>
                  <?php
                }
              ?>
        </ul> 
    </div>
  </body>
</html>