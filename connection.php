<?php

//koneksi database
$server = "localhost";
$user = "root";
$password = "";
$database = "db_bis";

//buat koneksi
$connection = mysqli_connect($server, $user, $password, $database) or die (mysqli_error($connection));

?>