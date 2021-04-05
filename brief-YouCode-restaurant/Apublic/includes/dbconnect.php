<?php
$dsn = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'brief_project_sp2';
$link = mysqli_connect($dsn, $user, $password, $db_name);
if (mysqli_connect_error()) :
  die("failed to connect with Mysql: " . mysqli_connect_error());
endif;




