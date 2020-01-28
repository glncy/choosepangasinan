<?php

include($_SERVER["DOCUMENT_ROOT"]."/localhost.php");

$query="SELECT * FROM events";
$get=mysql_query($query);
while ($row = mysql_fetch_array($get)) {
	$id = $row['id'];
    $name = $row['event'];
    $email = $row['month'].", ".$row['date'];
    $comrev = $row['details'];
    include ('template.php');
}