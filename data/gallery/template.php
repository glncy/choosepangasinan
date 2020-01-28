<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <?php
				$query2="SELECT * FROM gallery where name='$spotname'";
				$get2=mysql_query($query2);
				$row2=mysql_fetch_assoc($get2);
				$filename1=$row2['filename1'];
				?>
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="images/carousel/<?php echo $filename1;?>" width="100%">
			    </div>
		<?php
		$query2="SELECT * FROM gallery where name='$spotname'";
		$get2=mysql_query($query2);
		$row2=mysql_fetch_assoc($get2);
		$filename2=$row2['filename2'];
		$filename3=$row2['filename3'];
		include ('images/carousel/template.php');
		?>
		</div>
	  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
</div>