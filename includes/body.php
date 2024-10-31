<html lang="en">

<?php
include("./config/config.php");
?>
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/main.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/png" href="favicon.ico">

	<!-- <link rel="stylesheet" href="stylesheets/fontello-ie7.css"><![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script type="text/javascript">

function GetClock(){
d = new Date(new Date().getTime());
nday   = d.getDay();
nmonth = d.getMonth();
ndate  = d.getDate();
nyear = d.getYear();
nhour  = d.getHours();
nmin   = d.getMinutes();
if(nyear<1000) nyear=nyear+1900;

     if(nhour ==  0) {ap = " AM";nhour = 12;} 
else if(nhour <= 11) {ap = " AM";} 
else if(nhour == 12) {ap = " PM";} 
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}

document.getElementById('clockbox').innerHTML=""+(nmonth+1)+"/"+ndate+"/"+nyear+" "+nhour+":"+nmin+ap+"";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;
</script>

</head>
<body id="nhome">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<header id="top_bar">
	<div class="container">
		<div class="eight columns">
			<span class="highlight left" style="padding-right: 5px;">Server Time:</span><div id="clockbox" class="left"></div>
		</div>

		<div class="eight columns">
			<ul id="top_list">
			<li <?php  ?>><a href="?p=staff">Staff</a></li>
				<li><a href="<?php echo $forum; ?>" target="_blank">Forums</a></li>
				<li><a href="https://discord.com/invite/sqJ3tqUMR9" target="_blank">Discord</a></li>
				<!-- PUT YOUR DISCORD INVITE HERE ^ -->
			</ul>
		</div>
	</div>
</header>

<!-- Container START -->
<?php include("./includes/nav.php"); ?>

<!-- second -->
	<div class="one-third column">
		<div class="top_contents">
			<div class="c_spacing">
				<div class="center" style="padding-top: 0px">
				</div>
				<div style="position: absolute; bottom: 5px; right: 90px; left: 30">
				<li <?php if ($url == '/?p=mapleshop') { ?>class="nhome" <?php } ?>><a href="?p=mapleshop"> <class="center" target="_blank"> <img src="images/tools/shop.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>

<!-- third -->
	<div class="one-third column">
		<div class="top_contents">
			<div class="c_spacing">
				<div class="left">
					<div class="dl_block">
				<li <?php if ($url == '/?p=description') { ?>class="nhome" <?php } ?>><a href="?p=description"> <class="center" target="_blank"> <div class="button normal">DiversityMaple Description</div></a></li>
				<li <?php if ($url == '/?p=features') { ?>class="nhome" <?php } ?>><a href="?p=features"> <class="center" target="_blank"> <div class="button normal">DiversityMaple Features</div></a>
				
				<div class="dl_desc">
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>


<!-- Sidebar =================================== -->
<div class="one-third column">
	<div id="side_fixed">
		<div class="side_login">
			<img src="images/tools/ladder_holder.png" style="position: absolute; top: -20px; left: 20px"/>
			<div class="c_spacing">
				<?php include("cp/cp.php"); ?>
			</div>
		</div>



		<iframe src="https://discord.com/widget?id=789326116074029056&theme=dark" width="310" height="270" allowtransparency="true" frameborder="0"></iframe>
	     <!-- PUT YOUR DISCORD WIDGET HERE ^ -->
 	</div>	
</div>


<!-- Javascript -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
<script src="assets/js/jquery.easytabs.min.js"></script>
<script type="text/javascript">
    $(document).ready( function() {
      $('#tabs').easytabs();
    });
  </script>
</html>

<!-- Main Content =================================== -->
<div class="two-thirds column">
	<div class="main_content">
		<div class="c_spacing">