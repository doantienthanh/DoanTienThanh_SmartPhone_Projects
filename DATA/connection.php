<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart_phone_shop";

$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
$connection->close();
?>