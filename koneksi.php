<?php 

$dbHost = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "rental";

$conn = mysqli_connect($dbHost, $dbUsername, $dbPass, $dbName);

// setting waktu WIB
date_default_timezone_set("Asia/Jakarta");
