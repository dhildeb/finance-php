<?php
  include_once '../util/logger.php';

$servername = "localhost";
$username = "root";
$password = "Testing!123";
$db = 'finance';
$table = 'entries';

$conn = new mysqli($servername, $username, $password, $db);
if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}
console_log("Successfully connected to MySQL!");