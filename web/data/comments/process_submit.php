<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$comments=$_POST['comments'];
	$place=$_GET['place'];
	include($_SERVER["DOCUMENT_ROOT"]."/connect_server.php");
	$query="INSERT INTO comments(name,email,address,com_rev,place) VALUES ('$name','$email','$address','$comments','$place');";
	mysql_query($query);
	mysql_close();
	header('Location: ../../content.php?place='.$place);
?>