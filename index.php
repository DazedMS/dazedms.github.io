<?php
include('includes/body.php');

?>


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

<div id="mainbg">

<?php

$page = @$_GET['page'];
switch ($page) {
		case "doLogin":
			include("cp/doLogin.php");
			break;
		case "logout":
			include("cp/logout.php");
			break;
		case "charfix":
			include("cp/user/unstuck.php");
			break;	
		case "news_manage":
			include("cp/admin/news/index.php");
			break;
		case "event_manage":
			include("cp/admin/events/index.php");
			break;
		case "acp":
			include("cp/admin/settings/index.php");
			break;
		case "settings":
			include("cp/user/settings.php");
			break;
		}
?>


<?php
$getpage = isset($_GET['p']) ? $_GET['p'] : "";

	switch($getpage){
		case "home":
			include("p/home.php");
			break;
		case "Mapleshop":
			include("p/equinoxshop.php");
			break;
		case "register":
			include("p/register.php");
			break;
		case "description":
			include("p/description.php");
			break;	
		case "features":
			include("p/features.php");
			break;	
		case "download":
			include("p/download.php");
			break;
		case "staff":
			include("p/staff.php");
			break;	  			
		case "rankings":
			include("p/rankings.php");
			break;
		case "vote":
			include("p/vote.php");
			break;	
		case "donate":
			include("p/donate.php");
			break;
		case "doLogin":
			include("cp/doLogin.php");
			break;
		case "logout":
			include("cp/logout.php");
			break;
		case "charfix":
			include("cp/user/unstuck.php");
			break;
		case "news_manage":
			include("cp/admin/news/index.php");
			break;
		case "event_manage":
			include("cp/admin/events/index.php");
			break;
		case "acp":
			include("cp/admin/settings/index.php");
			break;
		case "settings":
			include("cp/user/settings.php");
			break;	
		default:
			include("p/home.php");
			break;
	}
?>


</div>

<?php
include("./includes/footer.php");
?>