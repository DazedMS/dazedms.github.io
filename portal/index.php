<!DOCTYPE HTML>

<script>

var isNS = (navigator.appName == "Diversity") ? 1 : 0;

if(navigator.appName == "Diversity") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);

function mischandler(){

return false;

var message="Right-clicking is disabled";

}

function mousehandler(e){

var myevent = (isNS) ? e : event;

var eventbutton = (isNS) ? myevent.which : myevent.button;

if((eventbutton==2)||(eventbutton==3)) return false;

}

document.oncontextmenu = mischandler;

document.onmousedown = mousehandler;

document.onmouseup = mousehandler;

</script>
<?php include 'config.php'?>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $ServerName?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="MapleStory Private Server">
<meta name="author" content="Diversity Network">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css" >
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
	
	
	
			<div id="BigVideo" class="player" data-property="{videoURL:'<?php echo $Video?>', containment:'body', autoPlay:true, mute:true, startAt:0, opacity:1, showControls : false}"></div>	
	
	
	<ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3></h3></div></li>
        </ul>

	
	<div id="content">
		<div class="soon wow slideInLeft"  data-wow-delay="7s"></div>
		<h1 class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="2s"><?php echo $ServerName?></h1>
		<div class="name wow bounceInDown" data-wow-duration="3s" data-wow-delay="4s">MapleStory Private Server</div>
		<div class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="2s">
			<a id="volume" onclick="$('#BigVideo').toggleVolume()"><i class="fa fa-volume-up"></i></a>
		</div>
		
		<a href ="<?php echo $Website?>"><img class="subscribe wow bounceInUp" src="images/website.png" data-wow-delay="6s"/></a>
	 
	  <a href ="<?php echo $Forums?>"><img class="subscribe1 wow bounceInUp" src="images/forums.png" data-wow-delay="7s" /></a>
	</div>
	
	
	
	
	
								

<script type="text/javascript" src="js/jquery.js"></script>


<script src="js/YTPlayer.js" type="text/javascript"></script> 
<script type="text/javascript">
  //<![CDATA[ 
		$(window).load(function(){
		 $(function(){
      $(".player").mb_YTPlayer();
    	});
	});
//]]>
</script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script>
//<![CDATA[
new WOW().init();
//]]>	
</script>




</body>
</html>
