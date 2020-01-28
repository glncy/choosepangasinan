<?php
if ((isset($_POST['name'],$_POST['des'])))
{
include($_SERVER["DOCUMENT_ROOT"]."/connect_server.php");

$name=$_GET['name'];
$id=$_GET['id'];
$upname=$_POST['name'];
$updes=$_POST['des'];
$query="UPDATE spots SET name='$upname', des='$updes' WHERE id='$id'";
mysql_query($query);
header('Location: spots.php');
}
?>