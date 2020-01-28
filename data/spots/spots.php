<div class="container-animation3">
<div class="row">
	<div class="col-sm-6">
		<?php include ("data/gallery/template.php");?>
		<div style="text-align: center; font-weight: bold;"><?php echo $spotname;?> Gallery</div>
	</div>
	<script>
		$('.carousel').carousel({
		  interval: 2000
		})
	</script>
	<div class="col-sm-6">
		<span style="font-family: Places; font-size:4.0vw; color: white; text-shadow: 0px 0px 50px black;"><?php echo $spotname;?><br/></span>
		<span style="color: white; text-shadow: 0px 0px 50px black; font-size: 20px;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $spotdes;?>
		</span>
	</div>
</div>
<hr/>
</div>