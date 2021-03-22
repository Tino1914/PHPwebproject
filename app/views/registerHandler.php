<?php

$username = "root";
$password = "";
$host = "localhost";
$database = "login";

$db = new PDO("mysql:host=$host;dbname=$database", $username,  $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
