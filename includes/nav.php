<?php
$countonline 	= mysqli_query($mysqli,"SELECT * FROM accounts where loggedin = 2");
$plyonline 		= mysqli_num_rows($countonline);
$url 			= $_SERVER['REQUEST_URI'];
?>

<div class="container">
	<div class="sixteen columns">
		<div id="logo"></div>

		<nav>
			<ul>
				<center><li <?php if ($url == '/?p=home') { ?>class="nhome" <?php } ?>><a href="?p=home">Home</a></li>
				<li <?php if ($url == '/?p=register') { ?>class="nhome" <?php } ?>><a href="?p=register">Register</a></li>
				<li <?php if ($url == '/?p=download') { ?>class="nhome" <?php } ?>><a href="?p=download">Download</a></li>
				<li <?php if ($url == '/?p=vote') { ?>class="nhome" <?php } ?>><a href="?p=vote">Vote</a></li>
				<li <?php if ($url == '/?p=donate') { ?>class="nhome" <?php } ?>><a href="?p=donate">Donate</a></li>
				<li <?php if ($url == '/?p=rankings') { ?>class="nhome" <?php } ?>><a href="?p=rankings">Rankings</a></li>
			</center>
			</ul>
		</nav>
		<div id="scroller_box">
			<div id="scroller_inside">
			<marquee scrollamount="10"> Welcome to <?php echo $servername; ?>! <strong>We are currently under development!</marquee>
			</div>
		</div>
	</div><!-- Three Columns =================================== -->
<!-- first -->

<div class="one-third column">
		<div class="top_contents">
			<div class="c_spacing">
				<div class="left">
					<?php if ($plyonline > 0) { ?>
						<img src="images/tools/Online.png"></div>
					<?php } else { ?>
						<img src="images/tools/Offline.png"></div>
					<?php } ?>
				<div class="top_right">
					<?php if ($plyonline > 0) { ?>
						<h5><span class="green"><?php echo $plyonline; ?></span> Players Online</h5>
						<p>
						<h6><span class="blue" style="position: absolute; top: 30px; left: 5px">Maple Version: 0.62</h5>
						<h6><span class="blue" style="position: absolute; top: 45px; left: 15px">Server Update: 1</h5>
						<h6><span class="blue" style="position: absolute; top: 75px; left: 20px">EXP Rate: <?php echo $exprate; ?>x</h5> 
						<h6><span class="blue" style="position: absolute; top: 90px; left: 15px">Meso Rate: <?php echo $mesorate; ?>x</h5> 
						<h6><span class="blue" style="position: absolute; top: 105px; left: 17px">Drop Rate: <?php echo $droprate; ?>x</h5> 
						</p>
					<?php } else { ?>
						<h5><span class="red"> Server Offline</h5>
						<p>
						<h6><span class="blue" style="position: absolute; top: 30px; left: 5px">Maple Version: 0.62</h5>
						<h6><span class="blue" style="position: absolute; top: 45px; left: 15px">Server Update: 1</h5>
						<h6><span class="blue" style="position: absolute; top: 75px; left: 20px">EXP Rate: <?php echo $exprate; ?>x</h5> 
						<h6><span class="blue" style="position: absolute; top: 90px; left: 15px">Meso Rate: <?php echo $mesorate; ?>x</h5> 
						<h6><span class="blue" style="position: absolute; top: 105px; left: 17px">Drop Rate: <?php echo $droprate; ?>x</h5> 
						<!-- <img src="./images/tools/rates.png" style="position: absolute; top: 30px; left: 15px"/> -->
						</p>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>