<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "church_db";

$conn = new mysqli($server, $username, $password, $db_name);
if($conn->connect_error){
	die("DB connection failed:" .$conn->connect_error);
}
?>