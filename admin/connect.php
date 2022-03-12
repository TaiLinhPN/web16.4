<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "";
$conn = mysqli_connect($servername, $username, $password, $database,3300);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>