<h2 class="highlight2">Home&nbsp;&nbsp;<span class="subheader"><br>Welcome to <?php echo $servername; ?>! See below for news, updates, and events!</span></h2>
				
<div id="tabs" class="tabs_container">
	<ul id="t">
		<li id="tab-news"><a href="#news">News</a></li>
		<li id="tab-updates"><a href="#updates">Updates</a></li>
		<li id="tab-event"><a href="#events">Events</a></li>
	</ul>
	<div class='tabs_below'>
		<div id="news">
			<?php include("./includes/news.php"); ?>
		</div>

		<div id="updates">
			<?php include("./includes/updates.php"); ?>
		</div>
			
		<div id="events">
			<?php include("./includes/events.php"); ?>
		</div>

	</div>
</div>