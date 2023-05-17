<?php
$dbhost = "localhost";	//$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "coffee_shop";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$GLOBALS['SQL'] = $conn;