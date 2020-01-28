<?php 
$id=$_GET['id'];
$name=$_GET['name'];
include($_SERVER["DOCUMENT_ROOT"]."/connect_server.php");

$query="DELETE FROM tblplaces WHERE id='$id'";
mysql_query($query);
$query="SELECT * FROM places WHERE placename='$name'";
$get=mysql_query($query);
$row=mysql_fetch_array($get);
$id=$row['id'];
$query="DELETE FROM places WHERE id='$id'";
mysql_query($query);



?>

<script>
alert('Deleted Sucessfully!');
</script>

<?php header('Location: places.php');?>