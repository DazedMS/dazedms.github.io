<h2 class="highlight2">Character Settings&nbsp;&nbsp;<span class="subheader">Fix your character!</span></h2>
<center>
<h4 class="highlight2">ID ALREADY LOGGED IN?&nbsp;&nbsp;</h4>
<img src="images/tools/Character Fix.gif" style="position: absolute; top: 250px; left: 355px"/>
<img src="images/tools/Character Fix 2.gif" style="position: absolute; top: 250px; left: 8px"/>
<?php
if(isset($_SESSION['id'])) {	
	if(!isset($_POST['loggedin'])){
		echo "<form method=\"POST\"><center><input class=\"button normal\" type=\"submit\" name=\"loggedin\" value=\"Force Logout\"></center></form>";
	} else {
		$name = $_SESSION['name'];
		$g = mysql_query("SELECT * FROM `accounts` WHERE `name`='".$name."'") or die(mysql_error());
		$u = mysql_fetch_array($g);
		if($u['loggedin']=="0"){
			echo "<br/><br/>You are already logged out!<br>You will be redirected in 2 seconds <meta http-equiv='refresh' content='2;url=\"?p=home\"'><br/><br/>";
		}else{
			$s = mysql_query("UPDATE `accounts` SET `loggedin`='0' WHERE `name`='".$name."'") or die(mysql_error());
			echo "<br/>Your account has been logged out.<br>You will be redirected in 2 seconds <meta http-equiv='refresh' content='2;url=\"?p=home\"'><br/><br/>";
		}
	}
} else {
	echo "You are not logged in.";
}
?>
<br/>
<h4 class="highlight2">CHARACTER FROZEN OR STUCK?&nbsp;&nbsp;</h4>

<?php
if(isset($_SESSION['id'])) {
	if(!isset($_POST['unstuck'])) {
		echo "<form method=\"POST\">Character:<br/><select name=\"char\">";
		$s = mysql_query("SELECT * FROM `characters` WHERE `accountid`='".$_SESSION['id']."' ORDER BY `id` ASC") or die(mysql_error());
		while($c = mysql_fetch_array($s)) {
			echo "<option value=\"".$c['id']."\">".$c['name']."</option>";
		}
		echo "</select><br /><input class=\"button normal\" type=\"submit\" name=\"unstuck\" value=\"Unstuck\"></form>";		
	} else {
		$char = mysql_real_escape_string($_POST['char']);
		$getMap = mysql_query("SELECT map FROM characters WHERE `id`='".$char."'") or die(mysql_error());
		$fetch = mysql_fetch_array($getMap);

		$map = mysql_real_escape_string(100000000);
		$m = mysql_query("UPDATE `characters` SET `map`='".$map."' WHERE `id`='".$char."'") or die(mysql_error());
		echo "Your character is now located in Henesys.<br/>You will be redirected in 2 seconds <meta http-equiv='refresh' content='2;url=\"?p=home\"'>";
		
	}
} else {
	echo "You are not logged in.";
}
?>
</center>
