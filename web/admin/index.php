<?php 
$title="Welcome!";
$GLOBALS['title'];
include('header.tpl');

session_start();
if(empty($_SESSION['login_user'])){
header("location: login.php");
}
?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-12" style="text-align: center;font-size: 50px;">
			Welcome Admin!
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-group panel-info pre-scrollable" style="height: 500px;">
				<div class="panel-heading" style="text-align: center;">Comments And Suggestions</div>
				<div class="panel-body">
					<?php
					include('data/comments/process.php');
					?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-group panel-info pre-scrollable" style="height: 500px;">
				<div class="panel-heading" style="text-align: center;">Comments in Places</div>
				<div class="panel-body">
					<?php
					include('data/comments/process_allplaces.php');
					?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-group panel-info pre-scrollable" style="height: 500px;">
				<div class="panel-heading" style="text-align: center;">Events</div>
				<div class="panel-body">
					<?php
					include('data/events/process.php');
					?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-group panel-info">
				<div class="panel-heading" style="text-align: center;">Add Events</div>
				<div class="panel-body">
					<form method="POST" action="new_event.php">
						<div class="form-group">
				  		<label for="sel1">Month:</label>
				  		<select class="form-control" name="month">
				   		<option>January</option>
				   		<option>February</option>
				   		<option>March</option>
				   		<option>April</option>
				   		<option>May</option>
				   		<option>June</option>
				   		<option>July</option>
				   		<option>August</option>
				   		<option>September</option>
				   		<option>October</option>
				   		<option>November</option>
				   		<option>December</option>
				 		 </select>
						</div>
						<div class="form-group">
							<label>Name of Event:</label>
							<input type="text" class="form-control" name="new_event" required="required">
						</div>
						<div class="form-group">
							<label>Date:</label>
							<input type="text" class="form-control" name="new_date" required="required">
						</div>
						<div class="form-group">
							<label>Description:</label>
							<textarea type="text" class="form-control" rows="10" style="resize: none;" name="new_des" required="required"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Submit" class="btn btn-default">
						</div>
					</div>
					</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h1>Admin Android App: </h1><a href="data/admin.apk" download>Click Here</a>
		</div>
		<div class="col-sm-12">
			<h1>Use these Photoshop Template for Uploading Photos: </h1>
			<h5>Gallery / Slideshow: </h5><a href="data/carousel_template.psd" download>Click Here</a>
			<h5>Places Thumbnail: </h5><a href="data/place_thumbnail.psd" download>Click Here</a>
			<h5>Places Cover Photo: </h5><a href="data/places_cover.psd" download>Click Here</a>
		</div>
	
<?php include('footer.tpl');?>