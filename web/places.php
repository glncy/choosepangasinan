<?php 
$title="Places";
$GLOBALS['title'];
include("header.tpl"); 
?>
<br/>
<div class="row" id="marginrow" style="font-size: 50px;">
	<h1 class="col-sm-12 pagetitle">
		Places
	</h1>
</div>
<br/>
<div class="row" id="marginrow" align="center">
<?php
include("connect_server.php");
$query="SELECT * FROM places";
$get=mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($get)) {
    $place = $row['placename'];
    $thumb = $row['placethumb'];
    include ('images/thumb/template.php');
}
?>
</div>

<?php include("footer.php"); ?>