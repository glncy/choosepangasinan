<?php 
$id=$_GET['id'];
$name=$_GET['name'];
include($_SERVER["DOCUMENT_ROOT"]."/connect_server.php");

$query="DELETE FROM spots WHERE id='$id'";
mysql_query($query);
$query="DELETE FROM gallery WHERE name='$name'";
mysql_query($query);



?>

<script>
alert('Deleted Sucessfully!');
</script>

<?php header('Location: spots.php');?>