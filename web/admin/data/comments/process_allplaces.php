<?php

include($_SERVER["DOCUMENT_ROOT"]."/connect_server.php");

$query="SELECT * FROM comments where place!='General'";
$get=mysql_query($query);
while ($row = mysql_fetch_array($get)) {
	$id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $comrev = $row['com_rev'];
    include ('template.php');
}