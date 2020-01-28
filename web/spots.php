<?php 
$spot=$_GET['select'];
$title=$spot;
$GLOBALS['title'];
include("header.tpl"); ?>

<div class="row" id="marginrow" style="font-size: 50px;">
	<h1 class="col-sm-12 pagetitle">
		<?php echo $spot;?>
	</h1>
</div>
<br/>
<div class="row" id="marginrow">
	<div class="col-sm-12" style="background-color: rgba(0,51,102,0.5);">
	<br/>
		<?php
		include("connect_server.php");
	$query="SELECT * FROM spots where type='$spot'";
	$get=mysql_query($query) or die(mysql_error());
	while ($row = mysql_fetch_array($get))
	{
		$spotname=$row['name'];
		$spotdes=$row['des'];
		include ('data/spots/spots.php');
	}
	?>
	</div>
</div>

<?php include("footer.php"); ?>