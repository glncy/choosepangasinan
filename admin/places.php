<?php 
$title="Places";
$GLOBALS['title'];
session_start();
if(empty($_SESSION['login_user'])){
header("location: login.php");
}
include('header.tpl');?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-12" style="text-align: center;font-size: 50px;">
			Places
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h3 align="center">Manage Places</h3>
			<br/>
			<form class="form-inline" action="">
			<div class="form-group">
			  <label for="sel1">Select Place:</label>
			  <select class="form-control" name="select">
			    <?php
			    include($_SERVER["DOCUMENT_ROOT"]."/localhost.php");

			    $query="SELECT * FROM places";
			    $get=mysql_query($query);
			    while ($row = mysql_fetch_array($get))
			    {
			    	$place=$row['placename'];
			    	echo ("<option>".$place."</option>");
			    }
			    ?>
			  </select>

			  <div class="form-group">
			  	<input type="submit" class="btn btn-sucess" value="Select">
			  </div>
			</div>
			</form>
			<br/>
			<?php
			if ((isset($_GET['select'])))
			{
				$placeselect=$_GET['select'];
				include($_SERVER["DOCUMENT_ROOT"]."/localhost.php");

				$query="SELECT * FROM tblplaces where placename='$placeselect'";
				$get=mysql_query($query);
				$row=mysql_fetch_array($get);
				if ($row)
				{
					$id=$row['id'];
					$name=$row['placename'];
					$des=$row['des'];
					$maps=$row['maps'];
					$aw=$row['aw'];
					include ('edit.php');
				}
				else
				{
					echo "<Script>alert('No data can be retrive.')</script>";
				}
			}
			?>
		</div>
		<div class="col-md-6">
			<h3 align="center">Add Places</h3>
			<br/>
			<form method="POST" action="new_process.php" enctype="multipart/form-data">
				<div class="form-group">
					<label>Name of Place:</label>
					<input type="text" class="form-control" name="new_place" required="required">
				</div>
				<div class="form-group">
					<label>Description:</label>
					<textarea type="text" class="form-control" rows="10" style="resize: none;" name="new_des" required="required"></textarea>
				</div>
				<div class="form-group">
					<label>Google Map:</label>
					<input type="text" class="form-control" placeholder="E.g. 192.5,121" name="new_maps" required="required">
				</div>
				<div class="form-group">
					<label>Accuweather Plugin Script</label>
					<textarea type="text" class="form-control" rows="5" style="resize: none;" name="new_aw" required="required"></textarea>
				</div>
				<div class="form-group">
					<label>Cover Photo:</label>
					</label>
					<input type="file" required="required" name="add_cover">
					</label>
				</div>
				<div class="form-group">
					<label>Thumbnail Photo:</label>
					</label>
					<input type="file" required="required" name="add_thumb">
					</label>
				</div>
				<div class="form-group" align="right">
				  	<input type="submit" class="btn btn-warning" value="Submit">
				 </div>
			</form>
		</div>
<?php include('footer.tpl');?>