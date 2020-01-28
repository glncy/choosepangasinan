<?php
if ((isset($_POST['name'],$_POST['des'])))
{
include($_SERVER["DOCUMENT_ROOT"]."/localhost.php");

$name=$_GET['name'];
$id=$_GET['id'];
$upname=$_POST['name'];
$updes=$_POST['des'];
$upmap=$_POST['map'];
$upaw=$_POST['aw'];
$query="UPDATE tblplaces SET placename='$upname', des='$updes', maps='$upmap', aw='$upaw' WHERE id='$id'";
mysql_query($query);
$query="SELECT * FROM spots where place='$name'";
$get=mysql_query($query);
while ($row=mysql_fetch_assoc($get))
{
	$id=$row['id'];
	$update="UPDATE spots SET place='$upname' WHERE id='$id'";
	mysql_query($update) or die(mysql_error());
}

$query="SELECT * FROM comments where place='$name'";
$get=mysql_query($query);
while ($row=mysql_fetch_assoc($get))
{
	$id=$row['id'];
	$update="UPDATE comments SET place='$upname' WHERE id='$id'";
	mysql_query($update) or die(mysql_error());
}
}

header('Location: places.php');

?>