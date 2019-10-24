<?php
    require_once 'core/init.php';
    require_once 'core/checksession.php';

    include 'header.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>[kaootblog] Welcome!</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body class="text-center">
    <div class="main-container">
        <p class="p-header">Welcome!</p>
        <p>
            This blog is dedicated to my adventures in PHP OOP design.
        </p>
        <div class="b-entry">
            <span class="p-subtitle">
                Added: 24-10-2019
            </span>
            <span class="p-title">
                My first blog
            </span>
            <p class="p-body">
                I've started the development of this blog to expand my knowledge of OOP based programming in PHP. In it's current form, only user validation and a simple index page is built, but new functionality will be added regularly.
            </p>
            <p class="p-body">
                The entire project is hosted on GitHub, at <a href="https://github.com/KaooT/OOP_Blog" target="_BLANK">https://github.com/KaooT/OOP_Blog</a>.
            </p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>