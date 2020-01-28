<?php 
$title="Spots";
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
			Spots
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h3 align="center">Manage Spots</h3>
			<br/>
			<form class="form-inline" action="">
			<div class="form-group">
			  <label for="sel1">Select Place:</label>
			  <select class="form-control" name="select">
			    <?php
			    include($_SERVER["DOCUMENT_ROOT"]."/connect_server.php");

			    $query="SELECT * FROM spots";
			    $get=mysql_query($query);
			    while ($row = mysql_fetch_array($get))
			    {
			    	$spot=$row['name'];
			    	echo ("<option>".$spot."</option>");
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
				$spotselect=$_GET['select'];
				include($_SERVER["DOCUMENT_ROOT"]."/connect_server.php");

				$query="SELECT * FROM spots where name='$spotselect'";
				$get=mysql_query($query);
				$row=mysql_fetch_array($get);
				if ($row)
				{
					$id=$row['id'];
					$name=$row['name'];
					$des=$row['des'];
					include ('edit_spots.php');
				}
				else
				{
					echo "<Script>alert('No data can be retrive.')</script>";
				}
			}
			?>
		</div>
		<div class="col-md-6">
			<h3 align="center">Add Spots</h3>
			<br/>
			<form method="POST" action="new_process_spots.php" enctype="multipart/form-data">
				<div class="form-group">
				  <label for="sel1">Select Place:</label>
				  <select class="form-control" name="select">
				    <?php
				    include($_SERVER["DOCUMENT_ROOT"]."/connect_server.php");

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
				  <label for="sel1">Type:</label>
				  <select class="form-control" name="type">
				   		<option>Beaches</option>
				   		<option>Caves</option>
				   		<option>View</option>
				   		<option>Falls</option>
				   		<option>Churches</option>
				   		<option>History And Arts</option>
				  </select>
				<div class="form-group">
					<label>Name of Spot:</label>
					<input type="text" class="form-control" name="new_spot" required="required">
				</div>
				<div class="form-group">
					<label>Description:</label>
					<textarea type="text" class="form-control" rows="10" style="resize: none;" name="new_des" required="required"></textarea>
				</div>
				<div class="form-group">
					<label>Picture 1</label>
					</label>
					<input type="file" required="required" name="pic1">
					</label>
				</div>
				<div class="form-group">
					<label>Picture 2</label>
					</label>
					<input type="file" required="required" name="pic2">
					</label>
				</div>
				<div class="form-group">
					<label>Picture 3</label>
					</label>
					<input type="file" required="required" name="pic3">
					</label>
				</div>
				<div class="form-group" align="right">
				  	<input type="submit" class="btn btn-warning" value="Submit">
				 </div>
			</form>
		</div>
	</div>
	</form>
	</div>
<?php include('footer.tpl');?>