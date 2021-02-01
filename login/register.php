<?php
header("content-type: text/html");
include ("user/db.php");
$conn = dbconn();

$user_name = $conn->real_escape_string($_GET['user_name']);
$user_password = $conn->real_escape_string($_GET['user_password']);
$user_emailId = $conn->real_escape_string($_GET['user_emailId']);

echo $user_password;


?>