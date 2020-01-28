<?php

$event=$_POST['new_event'];
$des=$_POST['new_des'];
$month=$_POST['month'];
$date=$_POST['new_date'];

include($_SERVER["DOCUMENT_ROOT"]."/connect_server.php");

$query="INSERT INTO events(event,details,month,date) VALUES ('$event','$des','$month','$date')";
mysql_query($query);
mysql_close();

header('Location: index.php');
?>