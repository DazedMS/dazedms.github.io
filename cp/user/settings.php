<h2 class="highlight2">Account Settings  <span class="subheader">change your password!</span><br><br></h2>
<?php
if(isset($_SESSION['id'])) {
	if(!isset($_POST['modify'])){
		$query = mysqli_query($mysqli,"SELECT * FROM `accounts` WHERE `id`='".$_SESSION['id']."'") or die(mysqli_error($mysqli));
		$row = mysqli_fetch_array($query);
		?>
		<table cellspacing=1 cellpadding=5>
		<tr><td class=listtitle colspan=2><span class='title2'></span></td></tr>
		<?php
		echo "
		<form method=\"POST\">
		<tr><td class=list align=left></td><td class=list> <input class=\"input\" type=\"password\" placeholder=\"Current Password\" name=\"current\" maxlength=\"12\"  /><br/></td></tr>
		<tr><td class=list align=left></td><td class=list> <input class=\"input\" type=\"password\" placeholder=\"New Password\" name=\"password\" maxlength=\"12\"  /><br/></td></tr>
		<tr><td class=list align=left></td><td class=list> <input class=\"input\" type=\"password\" placeholder=\"Confirm Password\" name=\"cpassword\" maxlength=\"12\"  /><br/></td></tr>
		<tr><td class=listtitle align=left colspan=2><center><input class=\"button normal\" type=\"submit\" name=\"modify\" value=\"Change Password\"></form></td></tr></center>";
	} else {
		$u = mysqli_query($mysqli,"SELECT * FROM `accounts` WHERE `id`='".$_SESSION['id']."'") or die(mysqli_error($mysqli));
		$user = mysqli_fetch_array($u);
		$current = mysqli_real_escape_string($mysqli,$_POST['current']);
		$pass = mysqli_real_escape_string($mysqli,$_POST['password']);
		$cpass = mysqli_real_escape_string($mysqli,$_POST['cpassword']);

		if(sha1($current) == $user['password']) {
			if($pass != ""){
				if($pass != $cpass) {
				    echo "The passwords does not match, please make sure they do!<br/>";
					$error = 1;
				} elseif (strlen($pass) > 12 || strlen($pass) < 6) {
				    echo "Your password must be between 6 and 12 characters.<br/>";
					$error = 1;
				} else {
					$u = mysqli_query($mysqli,"UPDATE `accounts` SET `password`='".sha1($pass)."',`salt`=NULL WHERE `name`='".$user['name']."'") or die(mysqli_error($mysqli));
					echo "Password changed.<br/>";
				}
			}
			
		} else {
			echo "Incorrect current password.<br/>";
			$error = 1;
		}
		
		if($error == 1)
			echo "<a href='?page=settings'>Back</a>";
		
	}
	echo "</fieldset>";
} else {
	echo "You are not logged in.";
}
echo "</td></tr></table>";
?>

