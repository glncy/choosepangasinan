    <?php 
    $title="Home";
    $GLOBALS['title'];
    include("header.tpl"); 
    ?>
    <div class="row">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner  navbar-collapse collapse" role="listbox">
    <div class="item active">
     <video style="width: 100%;" loop="loop" id="bgvid" autoplay="" muted>
        <source src="video/intro.mp4" type="video/mp4">
    </video>
    <div class="carousel-caption"><button style="opacity: 0.8;" onclick="mute();"><img src="images/mute.png" width="50px" alt="mute icon" id="muteicon"></button></div>
    </div>
    </div>
    </div>
    </div>
    <script>
    function mute() {
            var video = document.getElementById("bgvid");
         if (!video.muted) {
             document.getElementById('muteicon').src = "images/mute.png";
            video.muted = true;
         }     else {
             document.getElementById('muteicon').src = "images/unmute.png";
             video.muted = false;
             }

        }
    </script>
    
    <br/>
    <div class="row">
        <div class="container-animation2">
    	<div class="col-xs-12" align="center" style="font-family: places; font-size: 7.0vw; color: white; text-shadow: 0px 0px 10px black;">Welcome to Pangasinan!</div>
        </div>
    </div>
    <br/>
    <div class="row">
    	<div class="col-sm-4">
        <div class="container-animation1">
    	<p style="font-size: 17px; text-indent: 50px;color: white; text-shadow: 0px 0px 20px black;">
    		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel lorem non massa malesuada rutrum. Cras mattis luctus eros. Integer dapibus cursus nisi, quis fringilla ex ullamcorper vitae. Nam dictum eleifend dapibus. Vestibulum sollicitudin, tortor eget facilisis porttitor, tortor augue volutpat sem, sit amet egestas dui est viverra diam. Aenean laoreet ligula a elit lacinia, in faucibus nulla dignissim. Donec sollicitudin magna quam, sed aliquet velit condimentum vel. Pellentesque dignissim, metus eget egestas suscipit, purus elit accumsan nisi, ac finibus lacus est hendrerit dolor. Ut et efficitur velit. Vivamus maximus rutrum dolor a aliquam. Sed efficitur dui a velit tincidunt elementum. Nam tincidunt sodales nulla, non tincidunt lacus lobortis non. Duis consequat eget nulla ut semper. Proin ut ullamcorper est. Suspendisse nec ante porttitor, varius nunc at, suscipit velit.
    	</p>
        </div>
    	</div>
    	<div class="col-sm-8" align="center">
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAw_5gDKl_43STzOtkGb9KvtEGZgQ3fQSQ'></script><div style='overflow:hidden;height:100%;width:100%;'><div id='gmap_canvas' style='height:40vw;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>   <script type='text/javascript'>function init_map(){var myOptions = {zoom:8,center:new google.maps.LatLng(15.903479, 120.256626),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(15.903479, 120.256626)});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
    </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-sm-12" align="center">
            <div class="container-animation1">
            <div style="background-color: rgba(0,0,0,0.7); padding: 10px;">
            <span style="color: white; font-size: 30px;text-shadow: 0px 0px 20px black;">Download our one-tap App now! Click <a href="data/choose_pangasinan.apk" download>Here</a>! <br/> <span style="font-size: 25px;">Available:</span></span> &nbsp&nbsp<i class="fa fa-android" aria-hidden="true" style="font-size: 25px; color: white; text-shadow: 0px 0px 20px black;"></i>
            </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="container-animation5">
    	<div class="col-md-12" align="center" style="font-family: Places; font-size: 6.0vw; color: white; text-shadow: 0px 0px 10px black;"><hr/>Top Destinations<hr/></div>
        </div>
    <div class="col-sm-6" style="padding: 10px;">
    	<div class="hovereffect">
            <a href="content.php?place=Alaminos"><img class="img-responsive" src="images/td/alaminos.png" alt="" width="100%"></a>
            	<a href="scontent.php?place=Alaminos"style="text-decoration: none; font-family: Title;">
                <div class="overlay">
                </div>
               
            <div class="carousel-caption">
    	    		<div style="font-family: Places; font-size: 4.0vw; top: 15px; position: relative;">Alaminos</div> </a>
       	    </div>
        </div>
    </div>
    <div class="col-sm-6" style="padding: 10px;">
    	<div class="hovereffect">
            <a href="content.php?place=Bolinao"><img class="img-responsive" src="images/td/bolinao.png" alt="" width="100%"></a>
            	<a href="content.php?place=Bolinao"style="text-decoration: none; font-family: Title;">
                <div class="overlay">
                </div>
                
            <div class="carousel-caption">
    	    		<div style="font-family: Places; font-size: 4.0vw; top: 15px; position: relative;">Bolinao</div></a>
       	    </div>
        </div>
    </div>
    <div class="col-sm-6" style="padding: 10px;">
    	<div class="hovereffect">
            <a href="content.php?place=Anda"><img class="img-responsive" src="images/td/anda.png" alt="" width="100%"></a>
            	<a href="content.php?place=Anda"style="text-decoration: none; font-family: Title;">
                <div class="overlay">
                </div>
                
            <div class="carousel-caption">
    	    		<div style="font-family: Places; font-size: 4.0vw; top: 15px; position: relative;">Anda</div></a>
       	    </div>
        </div>
    </div>
    <div class="col-sm-6" style="padding: 10px;">
        <div class="hovereffect">
            <a href="places.php"><img class="img-responsive" src="images/td/see.png" alt="" width="100%"></a>
                <a href="places.php"style="text-decoration: none; font-family: Title;">
                <div class="overlay">
                </div>
                
            <div class="carousel-caption">
                    <div style="font-family: Title; font-size: 2.5vw; top: 20px; position: relative;">SEE MORE PLACES!</div></a>
            </div>
        </div>
    </div>
    </div>
    <br/>
    <div class="row">
        <div class="container-animation5">
    	<div class="col-md-12" align="center" style="font-family: Places; font-size: 6.0vw; color: white; text-shadow: 0px 0px 10px black;"><hr/>Spots<hr/></div>
        </div>

    <div class="col-sm-4" style="padding: 10px;">
    	<div class="hovereffect">
            <a href="spots.php?select=Beaches"><img class="img-responsive" src="images/sp/beaches.png" alt=""></a>
            	<a href="spots.php?select=Beaches"style="text-decoration: none; font-family: Title;">
                <div class="overlay">
                </div>
                </a>
        </div>
    </div>
    <div class="col-sm-4" style="padding: 10px;">
    	<div class="hovereffect">
            <a href="spots.php?select=Caves"><img class="img-responsive" src="images/sp/caves.png" alt=""></a>
            	<a href="spots.php?select=Caves"style="text-decoration: none; font-family: Title;">
                <div class="overlay">
                </div>
                </a>
        </div>
    </div>
    <div class="col-sm-4" style="padding: 10px;">
    	<div class="hovereffect">
            <a href="spots.php?select=View"><img class="img-responsive" src="images/sp/views.png" alt=""></a>
            	<a href="spots.php?select=View"style="text-decoration: none; font-family: Title;">
                <div class="overlay">
                </div>
                </a>
        </div>
    </div>
    <div class="col-sm-4" style="padding: 10px;">
    	<div class="hovereffect">
            <a href="spots.php?select=Falls"><img class="img-responsive" src="images/sp/falls.png" alt=""></a>
            	<a href="spots.php?select=Falls"style="text-decoration: none; font-family: Title;">
                <div class="overlay">
                </div>
                </a>
        </div>
    </div>
    <div class="col-sm-4" style="padding: 10px;">
    	<div class="hovereffect">
            <a href="spots.php?select=Churches"><img class="img-responsive" src="images/sp/churches.png" alt=""></a>
            	<a href="spots.php?select=Churches"style="text-decoration: none; font-family: Title;">
                <div class="overlay">
                </div>
                </a>
        </div>
    </div>
    <div class="col-sm-4" style="padding: 10px;">
    	<div class="hovereffect">
            <a href="spots.php?select=History+And+Arts"><img class="img-responsive" src="images/sp/haa.png" alt=""></a>
            	<a href="spots.php?select=History+And+Arts"style="text-decoration: none; font-family: Title;">
                <div class="overlay">
                </div>
                </a>
        </div>
    </div>
    </div>
    <br/>
    <div class="row">
    <div class="container-animation5">
    	<div class="col-md-12" align="center" style="font-family: Places; font-size: 6.0vw; color: white; text-shadow: 0px 0px 10px black;"><hr/>Places<hr/></div>
    </div>
    <?php
    include("localhost.php");
    $query="SELECT * FROM places limit 3";
    $get=mysql_query($query) or die(mysql_error());
    while ($row = mysql_fetch_array($get)) {
        $place = $row['placename'];
        $thumb = $row['placethumb'];
        include ('images/thumb/template.php');
    }
    ?>
    <div class="col-sm-3" style="padding: 10px;">
    	<div class="hovereffect">
    		<div class="carousel-caption" style="font-size: 30px;font-family: Title; text-shadow: 0px 0px 10px black; margin-left: -10px;" align="center">
       			See more!
       		</div>
            <a href="places.php"><img class="img-responsive" src="images/seemore.png" alt=""></a>
            	<a href="places.php"style="text-decoration: none; font-family: Title;">
                <div class="overlay">
                </div>
                </a>
        </div>
    </div>
    </div>
    <br/>
    <div class="row">
    <div class="container-animation5">
    	<div class="col-md-12" align="center" style="font-family: Places; font-size: 6.0vw; color: white; text-shadow: 0px 0px 10px black;"><hr/>Events<hr/></div>
    </div>
    </div>
<div class="row" id="marginrow">
    <h1 class="col-sm-12 pagetitle">
        October
    </h1>
</div>
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
            echo "<h1 style='text-align: center;'>No Events Available. Click <a href='events.php' style='color: white;'>Here</a> to see more.<h1>";
          }

          ?>
        </div>
    </div>
    <br/>
    <div class="row">
    <div class="container-animation5">
    	<div class="col-md-12" align="center" style="font-family: Places; font-size: 6.0vw; color: white; text-shadow: 0px 0px 10px black;"><hr/>Gallery<hr/></div>
    </div>
        <div class="col-sm-12"><img src="images/polariod.png" class="img-responsive"></div>
        <div class="col-sm-12" align="center"><h1><a href="gallery.php" style="color: white; text-shadow: 0px 0px 10px black;">See More about Gallery!</a></h1></div>
    </div>
    <br/>

    <?php include("footer.php"); ?>