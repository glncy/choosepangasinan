<?php 
$title="Events";
$GLOBALS['title'];
include("header.tpl"); ?>

<br/>
<div class="row" id="marginrow">
	<h1 class="col-sm-12 pagetitle">
		Events
	</h1>
</div>
<br/>
<div class="row">
	<div class="col-sm-12">
	<nav style="font-size: 15px;">
	<ul class="nav nav-pills nav-justified">
		<li href="#jan" data-toggle="tab"><a href="">January</a></li>
		<li href="#feb" data-toggle="tab"><a href="">February</a></li>
		<li href="#mar" data-toggle="tab"><a href="">March</a></li>
		<li href="#apr" data-toggle="tab"><a href="">April</a></li>
		<li href="#may" data-toggle="tab"><a href="">May</a></li>
		<li href="#jun" data-toggle="tab"><a href="">June</a></li>
		<li href="#jul" data-toggle="tab"><a href="">July</a></li>
		<li href="#aug" data-toggle="tab"><a href="">August</a></li>
		<li href="#sep" data-toggle="tab"><a href="">September</a></li>
		<li href="#oct" data-toggle="tab" class="active"><a href="">October</a></li>
		<li href="#nov" data-toggle="tab"><a href="">November</a></li>
		<li href="#dec" data-toggle="tab"><a href="">December</a></li>
	</ul>
	</nav>
	</div>
</div>
<br/>





<div class="tab-content">
  <div id="jan" class="tab-pane fade">
  	<div class="row" id="marginrow">
  		<div class="panel-group">
		 <?php
          include('localhost.php');
          $query = "SELECT * FROM events WHERE month='January'";
          $get = mysql_query($query);
          if (mysql_num_rows($get)>0)
          {
          while ($row = mysql_fetch_array($get)) {
            $event = $row['event'];
            $des = $row['details'];
            $date = $row['date'];
            include ('data/events/template.php');
          }
          }
          else
          {
            echo "<h1 style='text-align: center;'>No Events Available<h1>";
          }

          ?>
		</div>
	</div>
</div>
<div id="feb" class="tab-pane fade">
   <div class="row" id="marginrow">
  		<div class="panel-group">
		<?php
          include('localhost.php');
          $query = "SELECT * FROM events WHERE month='February'";
          $get = mysql_query($query);
          if (mysql_num_rows($get)>0)
          {
          while ($row = mysql_fetch_array($get)) {
            $event = $row['event'];
            $des = $row['details'];
            $date = $row['date'];
            include ('data/events/template.php');
          }
          }
          else
          {
            echo "<h1 style='text-align: center;'>No Events Available<h1>";
          }

          ?>
		</div>
	</div>
</div>
  <div id="mar" class="tab-pane fade">
        <div class="row" id="marginrow">
	
  		<div class="panel-group">
		<?php
          include('localhost.php');
          $query = "SELECT * FROM events WHERE month='March'";
          $get = mysql_query($query);
          if (mysql_num_rows($get)>0)
          {
          while ($row = mysql_fetch_array($get)) {
            $event = $row['event'];
            $des = $row['details'];
            $date = $row['date'];
            include ('data/events/template.php');
          }
          }
          else
          {
            echo "<h1 style='text-align: center;'>No Events Available<h1>";
          }

          ?>
	
		</div>
	</div>
</div>
  <div id="apr" class="tab-pane fade">
      <div class="row" id="marginrow">
	
  		<div class="panel-group">
		<?php
          include('localhost.php');
          $query = "SELECT * FROM events WHERE month='April'";
          $get = mysql_query($query);
          if (mysql_num_rows($get)>0)
          {
          while ($row = mysql_fetch_array($get)) {
            $event = $row['event'];
            $des = $row['details'];
            $date = $row['date'];
            include ('data/events/template.php');
          }
          }
          else
          {
            echo "<h1 style='text-align: center;'>No Events Available<h1>";
          }

          ?>

		</div>
	</div>
</div>
	
  <div id="may" class="tab-pane fade">
      <div class="row" id="marginrow">
	
  		<div class="panel-group">
		<?php
          include('localhost.php');
          $query = "SELECT * FROM events WHERE month='May'";
          $get = mysql_query($query);
          if (mysql_num_rows($get)>0)
          {
          while ($row = mysql_fetch_array($get)) {
            $event = $row['event'];
            $des = $row['details'];
            $date = $row['date'];
            include ('data/events/template.php');
          }
          }
          else
          {
            echo "<h1 style='text-align: center;'>No Events Available<h1>";
          }

          ?>

		</div>
	</div>
</div>
	
  <div id="jun" class="tab-pane fade">
       <div class="row" id="marginrow">
	
  		<div class="panel-group">
		<?php
          include('localhost.php');
          $query = "SELECT * FROM events WHERE month='June'";
          $get = mysql_query($query);
          if (mysql_num_rows($get)>0)
          {
          while ($row = mysql_fetch_array($get)) {
            $event = $row['event'];
            $des = $row['details'];
            $date = $row['date'];
            include ('data/events/template.php');
          }
          }
          else
          {
            echo "<h1 style='text-align: center;'>No Events Available<h1>";
          }

          ?>

		</div>
	</div>
</div>
	
  <div id="jul" class="tab-pane fade">
       <div class="row" id="marginrow">
	
  		<div class="panel-group">
		<?php
          include('localhost.php');
          $query = "SELECT * FROM events WHERE month='July'";
          $get = mysql_query($query);
          if (mysql_num_rows($get)>0)
          {
          while ($row = mysql_fetch_array($get)) {
            $event = $row['event'];
            $des = $row['details'];
            $date = $row['date'];
            include ('data/events/template.php');
          }
          }
          else
          {
            echo "<h1 style='text-align: center;'>No Events Available<h1>";
          }

          ?>

		</div>
	</div>
</div>
	
  <div id="aug" class="tab-pane fade">
      <div class="row" id="marginrow">
	
  		<div class="panel-group">
		<?php
          include('localhost.php');
          $query = "SELECT * FROM events WHERE month='August'";
          $get = mysql_query($query);
          if (mysql_num_rows($get)>0)
          {
          while ($row = mysql_fetch_array($get)) {
            $event = $row['event'];
            $des = $row['details'];
            $date = $row['date'];
            include ('data/events/template.php');
          }
          }
          else
          {
            echo "<h1 style='text-align: center;'>No Events Available<h1>";
          }

          ?>

		</div>
	</div>
</div>
	
  <div id="sep" class="tab-pane fade">
        <div class="row" id="marginrow">
	
  		<div class="panel-group">
		<?php
          include('localhost.php');
          $query = "SELECT * FROM events WHERE month='September'";
          $get = mysql_query($query);
          if (mysql_num_rows($get)>0)
          {
          while ($row = mysql_fetch_array($get)) {
            $event = $row['event'];
            $des = $row['details'];
            $date = $row['date'];
            include ('data/events/template.php');
          }
          }
          else
          {
            echo "<h1 style='text-align: center;'>No Events Available<h1>";
          }

          ?>

		</div>
	</div>
</div>
	
  <div id="oct" class="tab-pane fade in active">
       <div class="row" id="marginrow">
	
  		<div class="panel-group">
		<?php
          include('localhost.php');
          $query = "SELECT * FROM events WHERE month='October'";
          $get = mysql_query($query);
          if (mysql_num_rows($get)>0)
          {
          while ($row = mysql_fetch_array($get)) {
            $event = $row['event'];
            $des = $row['details'];
            $date = $row['date'];
            include ('data/events/template.php');
          }
          }
          else
          {
            echo "<h1 style='text-align: center;'>No Events Available<h1>";
          }

          ?>

		</div>
	</div>
</div>
	
  <div id="nov" class="tab-pane fade">
       <div class="row" id="marginrow">

  		<div class="panel-group">
		<?php
          include('localhost.php');
          $query = "SELECT * FROM events WHERE month='November'";
          $get = mysql_query($query);
          if (mysql_num_rows($get)>0)
          {
          while ($row = mysql_fetch_array($get)) {
            $event = $row['event'];
            $des = $row['details'];
            $date = $row['date'];
            include ('data/events/template.php');
          }
          }
          else
          {
            echo "<h1 style='text-align: center;'>No Events Available<h1>";
          }

          ?>

		</div>
	</div>
</div>
	
  <div id="dec" class="tab-pane fade">
     <div class="row" id="marginrow">
	
  		<div class="panel-group">
		<?php
          include('localhost.php');
          $query = "SELECT * FROM events WHERE month='December'";
          $get = mysql_query($query);
          if (mysql_num_rows($get)>0)
          {
          while ($row = mysql_fetch_array($get)) {
            $event = $row['event'];
            $des = $row['details'];
            $date = $row['date'];
            include ('data/events/template.php');
          }
          }
          else
          {
            echo "<h1 style='text-align: center;'>No Events Available<h1>";
          }

          ?>

		</div>
	</div>
</div>
</div>

<br/>
<br/>
<br/>
<br/>
<br/>	


<?php include("footer.php"); ?>