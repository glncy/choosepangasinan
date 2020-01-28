<?php
$id = $_GET['id'];
include($_SERVER["DOCUMENT_ROOT"]."/localhost.php");

$query="DELETE FROM comments where id='$id'";
mysql_query($query);
header("Location: ../../index.php");
?>