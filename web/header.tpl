<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?> | Choose Pangasinan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/animation-css/animate.css">
	<link rel="shortcut icon" href="images/logo.gif">
	<script src="assets/bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/animation-css/jquery.viewportchecker.js"></script>
	<script>
    jQuery(document).ready(function() {
    jQuery('.container-animation1').addClass(".visible").viewportChecker({
        classToAdd: 'visible animated bounceIn',
        offset: 100
       });
});
  </script>
  <script>
    jQuery(document).ready(function() {
    jQuery('.container-animation2').addClass(".visible").viewportChecker({
        classToAdd: 'visible animated fadeInLeft',
        offset: 100
       });
});
  </script>
  <script>
    jQuery(document).ready(function() {
    jQuery('.container-animation3').addClass(".visible").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100
       });
});
  </script>
  <script>
    jQuery(document).ready(function() {
    jQuery('.container-animation4').addClass(".visible").viewportChecker({
        classToAdd: 'visible animated swing',
        offset: 100
       });
});
  </script>
  <script>
    jQuery(document).ready(function() {
    jQuery('.container-animation5').addClass(".visible").viewportChecker({
        classToAdd: 'visible animated zoomIn',
        offset: 100
       });
});
  </script>
</head>
<body>

<div class="loader"></div>
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>

<a href="#home" class="back-to-top">BUTTON</a>
<a href="#home"><img class="back-to-top" src="images/up.png"></a>
<script type="text/javascript">
	var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
	if ( $(window).scrollTop() > amountScrolled ) {
		$('img.back-to-top').fadeIn('slow');
	} else {
		$('img.back-to-top').fadeOut('slow');
	}
});
</script>


<script type="text/javascript">
var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
if(nyear<1000) nyear+=1900;

var nhour=d.getHours(),nmin=d.getMinutes(),ap;
if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;

document.getElementById('clockbox').innerHTML=""+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>

<div id="clockbox" class="date navbar-collapse collapse"></div>


<div class="container-fluid" id="home">
<header style="width: 100%;">
	<div class="row header">
		<div class="collapse navbar-collapse">
			<div class="col-xs-12" align="center">
			<div class="container-animation1">
				<h6 style="display: inline-block;"><img src="images/logo.gif" class="img-responsive" width="150px"></h6>
				<h1 class="headername" style="display: inline-block; top: -45px; position: relative; font-size: 45px;">
					<span class="c">C</span><span class="h">H</span><span class="o">O</span><span class="o_2">O</span><span class="s">S</span><span class="e">E</span>
					<span class="p">P</span><span class="a">A</span><span class="n">N</span><span class="g">G</span><span class="a_2">A</span><span class="s_2">S</span><span class="i">I</span><span class="n_2">N</span><span class="a_3">A</span><span class="n_3">N</span><span class="ex">!</span>
				</h1>
			</div>
			</div>
		</div>
	</div>
	<div class="row navdes">
		<nav  class="navbar navbar-primary navbar-top" style="border-radius: 0px; margin-bottom: 0px;">
			<div class="navbar-header navdes">
				<button type="button" class="navbar-toggle navbar-default" style="float: left; margin-left: 15px;" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars" style="display: inline-block; font-size: 2.5vw;"><div style="display: inline-block; font-size: 2.5vw; font-family: Font;">&nbsp;Menu </div></i>
				</button>
				<div class="navbar-toggle navbar-default navdes">
					<a href="" style="text-decoration: none;">
					<div class="headerformobile">
						<img src="images/logo.gif" width="30px">
						<span class="c">C</span><span class="h">H</span><span class="o">O</span><span class="o_2">O</span><span class="s">S</span><span class="e">E</span>
						<span class="p">P</span><span class="a">A</span><span class="n">N</span><span class="g">G</span><span class="a_2">A</span><span class="s_2">S</span><span class="i">I</span><span class="n_2">N</span><span class="a_3">A</span><span class="n_3">N</span><span class="ex">!</span>
					</div>
					</a>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav" style="font-family: Font;">
					<li><a href="index.php">Home</a></li>
					<li><a href="top.php">Top Destinations</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" id="design" >Spots <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background-color: rgba(0,0,0,0.8);">
							<li style="padding: 10px;"><a href="spots.php?select=Beaches" id="design">Beaches</a></li>
							<li style="padding: 10px;"><a href="spots.php?select=Caves" id="design">Caves</a></li>
							<li style="padding: 10px;"><a href="spots.php?select=View" id="design">View</a></li>
							<li style="padding: 10px;"><a href="spots.php?select=Falls" id="design">Falls</a></li>
							<li style="padding: 10px;"><a href="spots.php?select=Churches" id="design">Churches</a></li>
							<li style="padding: 10px;"><a href="spots.php?select=History+And+Arts" id="design">History and Arts</a></li>
						</ul>
					</li>
					<li><a href="places.php">Places</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<script>
		$(function(){
		    $(".dropdown").hover(            
		            function() {
		                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
		                $(this).toggleClass('open');
		                $('b', this).toggleClass("caret caret-up");                
		            },
		            function() {
		                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
		                $(this).toggleClass('open');
		                $('b', this).toggleClass("caret caret-up");                
		            });
		    });
	</script>
</header>
<div class="container-fluid bg navbar-collapse">