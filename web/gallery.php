<?php 
$title="Gallery";
$GLOBALS['title'];
include("header.tpl"); ?>

<div class="row" id="marginrow" style="font-size: 50px;">
	<h1 class="col-sm-12 pagetitle">
		Gallery
	</h1>
</div>
<div class="row navbar-collapse collapse">
<div class="container-animation4">
	<div class="col-sm-12" align="center">
		<img src="images/polariod.png" class="img-responsive">
	</div>
</div>
</div>
<div class="row">
<div class="container-animation2">
	<div class="col-sm-4">
	    <div class="hovereffect">
	        <img class="img-responsive" src="images/carousel/2.png" alt="" width="100%">
	            <div class="overlay">
	                <h2>Alaminos, Hundred Islands</h2>
	            </div>
	    </div>
	</div>
	</div>
	<div class="container-animation5">
	<div class="col-sm-4">
	    <div class="hovereffect">
	        <img class="img-responsive" src="images/carousel/3_2.png" alt="" width="100%">
	            <div class="overlay">
	                <h2> Sison, Antong Falls</h2>
	            </div>
	    </div>
	</div>
	</div>
</div>
<br/>
<br/>
<br/>
<br/>
<style type="text/css">
	.hovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
}
.hovereffect .overlay {
    width: 100%;
    position: absolute;
    overflow: hidden;
    left: 0;
	top: auto;
	bottom: 0;
	padding: 1em;
	height: 4.75em;
	background: #0066ff;
	color: #3c4a50;
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
	-webkit-transform: translate3d(0,100%,0);
	transform: translate3d(0,100%,0);
}

.hovereffect img {
    display: block;
    position: relative;
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
}

.hovereffect:hover img {
-webkit-transform: translate3d(0,-10%,0);
	transform: translate3d(0,-10%,0);
}

.hovereffect h2 {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    position: relative;
    font-size: 17px;
    padding: 10px;
    background: rgba(0, 0, 0, 0.6);
	float: left;
	margin: 0px;
	display: inline-block;
}

.hovereffect a.info {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    text-transform: uppercase;
	color: #fff;
	border: 1px solid #fff;
	margin: 50px 0 0 0;
	background-color: transparent;
}
.hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
}


.hovereffect p.icon-links a {
	float: right;
	color: #3c4a50;
	font-size: 1.4em;
}

.hovereffect:hover p.icon-links a:hover,
.hovereffect:hover p.icon-links a:focus {
	color: #252d31;
}

.hovereffect h2,
.hovereffect p.icon-links a {
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
	-webkit-transform: translate3d(0,200%,0);
	transform: translate3d(0,200%,0);
}

.hovereffect p.icon-links a span:before {
	display: inline-block;
	padding: 8px 10px;
	speak: none;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}


.hovereffect:hover .overlay,
.hovereffect:hover h2,
.hovereffect:hover p.icon-links a {
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

.hovereffect:hover h2 {
	-webkit-transition-delay: 0.05s;
	transition-delay: 0.05s;
}

.hovereffect:hover p.icon-links a:nth-child(3) {
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}

.hovereffect:hover p.icon-links a:nth-child(2) {
	-webkit-transition-delay: 0.15s;
	transition-delay: 0.15s;
}

.hovereffect:hover p.icon-links a:first-child {
	-webkit-transition-delay: 0.2s;
	transition-delay: 0.2s;
}
</style>




<?php include("footer.php"); ?>