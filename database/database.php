<?php

$hostname = "localhost";
$database = "test_data_project";
$username = "root";
$password = "";

$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
$conn = new PDO($dsn, $username, $password);