<?php
if(basename($_SERVER["PHP_SELF"]) == "cp.php"){die("Error!");}

if(isset($_SESSION['id'])){
	$account = mysqli_query($mysqli,"SELECT * FROM `accounts` WHERE `name`='" . $_SESSION['name'] . "'") or die(mysqli_error($mysqli));
		$sql_account = mysqli_fetch_array($account);
		echo "<div class='cptext'>Welcome, ".$_SESSION['name']." You have ".$sql_account['paypalNX']." NX.</div>";
	
	
	
	$account = mysqli_query($mysqli,"SELECT * FROM `accounts` WHERE `name`='" . $_SESSION['name'] . "'") or die(mysqli_error($mysqli));
	

		$sql_account = mysqli_fetch_array($account);
		$stats = mysqli_query($mysqli,"SELECT * FROM `characters` WHERE `accountid`='" . $sql_account['id'] . "' LIMIT 1") or die(mysqli_error($mysqli));
	echo "
		</br></hr><br>
		<img src='images/tools/CP.gif' style='position: absolute; top: 40px; left: 200px'/>
		<a class='button normal cp' href='?page=charfix'>Character Fix</a>
		<br/>
		<a class='button normal cp' href='?page=settings'>Account Settings</a>
		";
		echo "<a class='button normal' href='?page=logout' style='text-decoration: none;'><div class=\"btn\">Logout</div></a>";
	
	} else {
	
	include("login.php");
}
?>