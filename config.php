<?php

$host = 'localhost';         // or 127.0.0.1
$user = 'root';              // default XAMPP username
$password = '';              // default XAMPP password is empty
$database = 'food'; // <-- replace with your actual database name

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>