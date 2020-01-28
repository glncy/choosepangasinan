<?php 
$plc=$_GET['place'];
include("localhost.php");
$get="SELECT * FROM tblplaces where placename='$plc' limit 1";
$query=mysql_query($get) or die(mysql_error());
$row=mysql_fetch_assoc($query);
$cover=$row['cover'];
$place=$row['placename'];
$des=$row['des'];
$maps=$row['maps'];
$aw=$row['aw'];

$title=$plc;
$GLOBALS['title'];
include("header.tpl");
?>

<div class="row">
	<img src="images/places_covers/<?php echo $cover;?>" width="100%">
	<div class="container-animation1">
	<h1 style="font-family: Places;font-size: 10.0vw; position: relative; margin-top: -8%; margin-left: 4%; color: white; text-shadow: 0px 0px 50px black;"><?php echo $place;?></h1>
	</div>
</div>
<br/>
<div class="row">
	<div class="col-sm-12" style="text-align: center;">
		<span style="color: white; text-shadow: 0px 0px 10px black; font-size: 20px;">
			<?php echo $des;?>
		</span>
	</div>
</div>
<hr/>
<br/>
	<?php
	$query="SELECT * FROM spots where place='$place'";
	$get=mysql_query($query);
	while ($row = mysql_fetch_array($get))
	{
		$spotname=$row['name'];
		$spotdes=$row['des'];
		include ('data/spots/spots.php');
	}
	?>
<br/>
<hr/>
<?php
include ("data/accu/template.php");
include ("data/maps/template.php");
?>
<br/>
<div class="row">
	<div class="col-sm-12">
		<hr/>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div style="font-family: Places; font-size: 5.0vw; color: white; text-shadow: 0px 0px 15px black;text-align: center;">Comments and Reviews</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<hr/>
	</div>
</div>	
<div class="row">
	<div class="col-sm-6">
		<div class="panel panel-group">
			<div class="panel-body pre-scrollable">
				<?php include('data/comments/process.php');?>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="panel panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">Have you been there? Share us your experience!</div>
					<div class="panel-body">
						<form method="POST" action="data/comments/process_submit.php?place=<?php echo $place;?>">
							  <div class="form-group">
							    <label for="Name">Name:</label>
							    <input type="text" class="form-control" name="name">
							  </div>
							  <div class="form-group">
							    <label for="email">E-mail:</label>
							    <input type="text" class="form-control" name="email">
							  </div>
							  <div class="form-group">
							    <label for="address">Address:</label>
							    <input type="address" class="form-control" placeholder="Optional" name="address">
							  </div>
							  <div class="form-group">
							    <label for="textarea">Comments and Reviews</label>
							    <textarea class="form-control" rows="3" name="comments"></textarea>
							  </div>
							  <input type="submit" onclick="message();" class="btn btn-default" value="Submit">
							 <script>
							 	function message()
							 	{
							 		alert("Thank you for submitting!");
							 	}
							 </script>
						</form>
					</div>
				</div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>