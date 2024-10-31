<?php
session_start();

$host['hostname'] = 'localhost'; // Hostname [Usually locahost]
$host['user'] = 'root'; // Database Username [Usually root]
$host['password'] = ''; // Database Password [Password]
$host['database'] = 'dazedstory'; // Database Name [DB]

$title 			= "DazedMS GMS v0.62"; // WEBSITE TITLE
$servername		= "DazedMS"; // SERVER NAME

$exprate	 	= 5; // Exp Rate
$mesorate 		= 2; // Meso Rate
$droprate	 	= 2; // Drop Rate

$forum 			= "/forums"; // Forum URL

$v['gtop'] = "https://gtop100.com/topsites/MapleStory/sitedetails/DiversityMaple-v62-In-Development-103006?vote=1";
/**
 * @source: https://gtop100.com/news/news_details/New-Pingback-Ip-32
 * @source: https://gtop100.com/test/pingback
 */
$v['authorized_ips'] = ['127.0.0.1', '198.148.82.98', '198.148.82.99', '104.28.15.89', '173.245.59.198', '173.245.59.206', '::1', '50.28.106.117'];
$v['vote_time'] = 86400; // 6 hours ► 21600.
$v['nx_award'] = 10000; // award 5000nx. Use INT value!
$v['votepoints_award'] = 0; // award 1 votepoint. Use INT value!
       
$client 		= "http://Maplestory.net/download/ImperialStory_Launcher.exe"; // Host
$client2 		= "https://www.dropbox.com/s/474ghysdxukdh2l/MapleStory%20Launcher.exe?dl=1"; // Drop Box
$setup 			= "https://www.dropbox.com/s/x10f4gzv0qiinyk/MapleStory%20Setup%20v1.exe?dl=1"; // Drop Box
$setup1 		= "https://drive.google.com/file/d/1SC9CgyanDGr5J2HC2dK_ThFXJ0Tscaf9/view"; // GOOGLE DRIVE
$setup2 		= "https://www.dropbox.com/s/leq0dveri2wg2ie/MSSetupv83.exe?dl=1"; // Drop Box
$Description    = "http://Maplestory.net/?p=description"; // EX : http://google.com/?p=description
$Features       = "http://Maplestory.net/?p=features"; // EX : http://google.com/?p=features

$downloadguide	= 'http://www.youtube.com/embed/REo-d0ouJSA'; // DOWNLOAD GUIDE

$serverip		= "47.221.93.229"; // The server IP [Default: 127.0.0.1 / localhost]
$loginport		= 8484; // The login port [Default: 8585]

$mysqli = mysqli_connect($host['hostname'],$host['user'],$host['password']) OR die("Can't connect to server");
mysqli_select_db($mysqli,$host['database']) OR die("Cannot select DB");

function sql_injectionproof($sCode) {
	if (function_exists("mysql_real_escape_string")) {
		$sCode = mysqli_real_escape_string($mysqli,$sCode);
	} else {
		$sCode = addslashes($sCode);
	}
	return $sCode;
}

if(basename($_SERVER["PHP_SELF"]) == "config.php"){
	die("Error 403 - Forbidden");
} 

?>