<?php 
$title="Login";
$GLOBALS['title'];
session_start();
if(!empty($_SESSION['login_user'])){
header("location: index.php");
}
include('header_login.tpl');?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-12" style="text-align: center;font-size: 50px;">
			Welcome Admin!
		</div>
	</div>
<br/>
<div class="row" align="center">
	<div class="col-sm-12">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<form method="POST" action="process_login.php">
				<div class="form-group">
					<label>Username:</label>
					<input type="text" class="form-control" name="user" required="required">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" name="pw" required="required">
				</div>
				<div>
				  	<input type="submit" class="btn btn-warning" value="Log-In" style="float: right;">
				 </div>
			</form>
		</div>
		</div>
	</div>