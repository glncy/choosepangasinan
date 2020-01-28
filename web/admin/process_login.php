<?php
// Define $user and $pw
$user=$_POST['user'];
$pw=$_POST['pw'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include($_SERVER["DOCUMENT_ROOT"]."/connect_server.php");

// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("SELECT * FROM admin WHERE pw='$pw' AND user='$user'") or die (mysql_error());
if ($query)
{
	$rows = mysql_num_rows($query) or die (mysql_error());
if ($rows == 1) {
session_start();
$_SESSION['login_user']=$user; // Initializing Session
header("Location: index.php"); // Redirecting To Other Page
}
}
else
{
	echo "error!";
}

?>