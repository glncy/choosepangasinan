<div class="col-sm-3" style="padding: 10px;">
    <div class="container-animation1">
	<div class="hovereffect">
		<div class="carousel-caption" style="font-size: 30px;font-family: Places; text-shadow: 0px 0px 10px black; margin-left: -10px;" align="center">
   			<?php echo $place;?>
   		</div>
        <a href="#" onclick="to_go('<?php echo $place;?>'');"><img class="img-responsive" src="images/thumb/<?php echo $thumb;?>" alt=""></a>
        	<a href="#" onclick="to_go('<?php echo $place;?>');"style="text-decoration: none; font-family: Title;">
            <div class="overlay">
            	Take me here!
            </div>
            </a>
    </div>
    </div>
    <script>
    	function to_go(places){

        var x=places;
        window.location.href = "content.php?place=" + x; 
        }
    </script>
</div>

	