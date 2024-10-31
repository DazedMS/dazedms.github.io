<?php
function sql_sanitize( $sCode ) {
	if (function_exists("mysql_real_escape_string" ) ) {		
		$sCode = mysqli_real_escape_string($mysqli, $sCode );		
	} else { 
		$sCode = addslashes( $sCode );				
	}
	return $sCode;							
}

$cpU = mysqli_real_escape_string($mysqli,$_POST['cpuser']);
$cpP = mysqli_real_escape_string($mysqli,$_POST['cppass']);
$cpS = mysqli_query($mysqli,"SELECT * FROM `accounts` WHERE `name`='".sql_sanitize($cpU)."'") or die(mysqli_error($mysqli));
$cpA = mysqli_fetch_array($cpS);

if(password_verify($cpP,$cpA ['password']) || $cpA['password'] == hash('sha512',$cpP.$cpA['salt']) || sha1($cpP) == $i['password']){
//if($cpA['password'] == sha1($cpP) || $cpA['password'] == hash('sha512',$cpP.$cpA['salt'])) {
	$sanitizename = sql_sanitize($cpA['name']);
	$sanitizepass = sql_sanitize($cpA['password']);
	$selectQ = mysqli_query($mysqli,"SELECT * FROM `accounts` WHERE `name`='".$sanitizename."' AND `password`='".$sanitizepass."'") or die(mysqli_error($mysqli));
	$selectF = mysqli_fetch_array($selectQ);
	$_SESSION['id'] = $selectF['id'];
	$_SESSION['name'] = $selectF['name'];
	
	if($selectF['webadmin'] == "2") { $_SESSION['webadmin'] = $selectF['webadmin']; }
	
	echo "
		<meta http-equiv='refresh' content='1;url=\"?p=home\"'>
		<div align='center'><br /><br /><br />You are now logged in. <a href='?p=home'>Click here</a> if you are not redirected in the next 3seconds.
	";
	
      // Remove the refresh and meta then make it say password or id was inccorect above where login / pass is located
	} else {
		echo "<br /><div align='center'>The username or password is incorrect.<br/>Returning to front page in 2 seconds.</div><br />
		<meta http-equiv='refresh' content='2;url=\"?p=home\"'>";
	} 
?>