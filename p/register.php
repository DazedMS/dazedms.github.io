<h2 class="highlight2">Sign Up  <span class="subheader"><br>Register your <?php echo $servername; ?> account today!</span></h2>

<?php
function sql_sanitize( $sCode ) {
	if ( function_exists( "mysql_real_escape_string" ) ) {
		$sCode = mysqli_real_escape_string($mysqli, $sCode );
	} else {
		$sCode = addslashes( $sCode );
	}
	return $sCode;
}

if (!@$_POST["register"] == 0) {
	$username 	= mysqli_real_escape_string($mysqli,$_POST['cusername']);
	$pass 		= mysqli_real_escape_string($mysqli,$_POST['cpassword']);
	$pass2 		= mysqli_real_escape_string($mysqli,$_POST['cpassword2']);
	$gender 	= mysqli_real_escape_string($mysqli,$_POST['cgender']);
	$email 		= mysqli_real_escape_string($mysqli,$_POST['cemail']);
	$email2 	= mysqli_real_escape_string($mysqli,$_POST['cemail2']);
	$datey 		= mysqli_real_escape_string($mysqli,$_POST['cyear']);
	$datem 		= mysqli_real_escape_string($mysqli,$_POST['cmonth']);
	$dated 		= mysqli_real_escape_string($mysqli,$_POST['cday']);
		
	//$usersafe = stripslashes($username);
	$query = "SELECT `id` FROM `accounts` WHERE `name`='".$username."' OR `email`='".$email."' LIMIT 1";
	$checka = mysqli_query($mysqli,$query);
	$rows = mysqli_num_rows($checka);
	
	if($rows > 0) {
	die("Username or e-mail is already used."); 
	}
	
	if ($email != $email2) {
		echo "<div class='alert_box'><strong></strong>  E-mails don't match.</div>";
	} else if ($pass != $pass2) {
		echo "<div class='alert_box'><strong></strong>  Passwords don't match.</div>";
	} else if (!strstr($email, "@")){
		echo "<div class='alert_box'><strong></strong>  Invalid E-Mail.</div>";
	} else if (($datey > 2015 && $datey < 1900) || ($datem < 0 && $datem > 12) || ($dated < 0 && $dated > 31)){
		echo "<div class='alert_box'><strong></strong>  Date of Birth is incorrect.</div>";
	} else if (strlen($username) < 4 & strlen($username) > 13) {
		echo "<div class='alert_box'><strong></strong>  Username has to be between 4 and 12 characters.</div>";
	} else if (strlen($pass) < 3 & strlen($pass) > 13) {
		echo "<div class='alert_box'><strong></strong>  Password has to be between 4 and 12 characters.</div>";
	} else {
		$options = array("cost"=>4);
		$safeuser	= sql_sanitize($username);
		$safepw		= sql_sanitize(password_hash($pass,PASSWORD_BCRYPT,$options));
		$safemail	= sql_sanitize($email);
		$safedobf	= sql_sanitize($datey)."-".sql_sanitize($datem)."-".sql_sanitize($dated);
		
		$ip			= "/".$_SERVER['REMOTE_ADDR'];
		$addUserQ = "INSERT INTO accounts (`name`, `password`, `ip`, `gender`, `email`, `birthday`) VALUES ('".$safeuser."', '".$safepw."', '".$ip."', '".$gender."', '".$safemail."', '".$safedobf."')";
		$addUser  = mysqli_query($mysqli,$addUserQ) or die(mysqli_error($mysqli));
		echo "<div class='success_box'><strong></strong>  Congratulations! You have successfully registered to MapleStory!</div>";
	}
}
?>

<form method="POST" action="" id="form_signup">
	<!-- /////////// STEP 1 \\\\\\\\\\ -->
	<div class="signup_header">
		<h4 class="highlight2">STEP 1 - GAME ACCOUNT CREATION</h4>
		<strong>Fill in your desired game information in the input boxes. Please note usernames cannot be revised once submitted.</strong>
	</div>

	<div class="half-column left">

		<!-- Username -->
		<label>Username:</label>
		<input type="text" class='input' name="cusername" maxlength="12" placeholder="Username" required/>

		<br />

		<!-- Password -->
		<label>Password:</label>
		<input type="password" class='input' name="cpassword" maxlength="12" placeholder="Password" required/>
	</div>
	<div class="half-column right">
		<!-- Gender -->
		<label>Gender</label>
		<select name="cgender">
			<option value="2">-</option>
			<option value="0">Male</option>
			<option value="1">Female</option>
		</select>

		<div style="height:15px;font-size:1px;"> </div>

		<!-- Password Comfirm -->
		<label>Confirm Password:</label>
		<input type="password" class='input' name="cpassword2" maxlength="30" size="32px" placeholder="Confirm Password" required/>
	</div>

	<br class="clear" />

	<!-- /////////// STEP 2 \\\\\\\\\\ -->
	<div class="signup_header">
		<h4 class="highlight2">STEP 2 - PERSONAL INFORMATION</h4>
		<strong>Please enter in the CORRECT email address, for it will be used to recover your password.</strong>
	</div>

	<div class="half-column left">
		<!-- Email -->
		<label>Email Address:</label>
		<input type="text" class='input' name="cemail" maxlength="50" size="32px" placeholder="Email Address" required />

		<br />

		<!-- DOB -->
		<label>Date of Birth: <small>(YYYY-MM-DD)</small></label>
		<input type="text" class='input' type="text" maxlength="4" class='input' name="cyear" placeholder="YYYY" required/>
		<input type="text" class='input' type="text" maxlength="4" class='input' name="cmonth" placeholder="MM" required/>
		<input type="text" class='input' type="text" maxlength="4" class='input' name="cday" placeholder="DD" required/>
	</div>
	<div class="half-column right">
		<!-- Comfirm Email -->
		<label>Confirm Email Address:</label>
		<input type="text" class='input' name="cemail2" maxlength="50" size="32px" placeholder="Confirm Email Address" required />
	</div>

	<br class="clear" />

	<!-- /////////// STEP 3 \\\\\\\\\\ -->
	<div class="signup_header">
		<h4 class="highlight2">STEP 3 - TERMS OF SERVICE AGREEMENT</h4>
		<strong>In order to start playing <?php echo $servername; ?>, you will have to agree to our rules and regulations. Please take your time and read through the regulations, and if you have no objections, click the Sign Up button.</strong>
	</div>

	<!-- TOS BOX -->
	<div class="tos_box">
		<h5 style="padding-left: 15px" class="highlight2">OFFICIAL <span style="text-transform: uppercase;"><?php echo $servername; ?></span> TERMS OF SERVICE</h5>
		<br />

		<h6 style="padding-left: 15px">INTRO</h6>
		<p style="padding: 0px 15px;">
By registering, accessing, playing, downloading, or any other forms of communicating with any of the <?php echo $servername; ?> servers, services, or players you agree to adhere to everything listed in this document. If you do not agree to these terms, you will be redirected from our website. All content published by <?php echo $servername; ?> is owned by <?php echo $servername; ?>. You agree that these terms may be updated at any point, and that your account may be terminated at any time, for any reason, without warning.</p>
		
		<hr />

		<h6 style="padding-left: 15px">DONATIONS</h6>
		<p style="padding: 0px 15px;">By donating you agree that this is not in any way a payment for goods or services, but a gift to supporting the betterment of gameplay. You agree not to dispute or charge back any donation, this will result in permanent termination of your access to our services.</p>
		
		<hr />

		<h6 style="padding-left: 15px">GAME RULES</h6>
		<p style="padding: 0px 15px;">
By downloading, running, or any other form of accessing the client named "<?php echo $servername; ?>.exe", you agree to the following:</p>

		<p style="padding: 0px 30px"><strong>Tampering</strong><br />You will not in any way tamper with the client, the files for the Maplestory version which <?php echo $servername; ?>.exe runs off of, or any other files associated with <?php echo $servername; ?>.exe.</p>
		<p style="padding: 0px 30px"><strong>Third Party Programs</strong><br />You will not use third party programs that have anything to do with Maplestory, or <?php echo $servername; ?>.</p>
		<p style="padding: 0px 30px"><strong>Advertising</strong><br />You will not advertise other servers, games, websites, or services other than <?php echo $servername; ?> on our website, gameserver, forums, or IRC.</p>
		<p style="padding: 0px 30px"><strong>Profiting</strong><br />You will not attempt to profit in any way off of <?php echo $servername; ?>. This means no selling your account, no selling items off of your account, no buying items from others, no buying accounts from others.</p>
		<p style="padding: 0px 30px"><strong>Harassment and Flaming</strong><br />You will not harass other users by any means. This means Super Megaphones of any kind, Buddylist system, whisper system, guild chat system, etc. You should know how to behave yourself.</p>
		<p style="padding: 0px 30px"><strong>Botting/Key-Binding</strong><br />This is also in accordance with the third party applications rule. <?php echo $servername; ?> defines botting as any form of automating gameplay. This means no weighing down keys, no auto typers, no macro programs, and no macro key usage on keyboards. If you do not respond to a Game Master after thirty seconds (30 Seconds) of them trying to get your attention, you will be banned. The official rule on this is one account per one physical computer.</p>

		<hr />

		<h6 style="padding-left: 15px">WEBSITE, FORUMS, AND DISCORD</h6>
		<p style="padding: 0px 30px"><strong>Registering</strong><br />By registering an account on <?php echo $servername; ?>.net, or any related services (the IRC Channel #<?php echo $servername; ?>, or the forums), you agree to use a name that does not in any way harass another user, imply that you are a staff member of <?php echo $servername; ?>, or in any other way negatively affect the users and/or staff of <?php echo $servername; ?>.</p>
		<p style="padding: 0px 30px"><strong>Forums</strong><br />By using the forums in any way, you agree to the following:</p>
		<p style="padding: 0px 45px"><strong>Flaming and Harassment</strong><br />You will not in any way harass another user. This means via posting, private messaging, or posting on someone's visitor wall.</p>
		<p style="padding: 0px 45px"><strong>Spamming</strong><br />You agree not to in any way interfere, negatively, with a users experience on our forums. You will be respectful. This is not hard.</p>
		<p style="padding: 0px 45px"><strong>Other forms of disruption</strong><br />You will not harass other users by any means. This means Super Megaphones of any kind, Buddylist system, whisper system, guild chat system, etc. You should know how to behave yourself.</p>
		<p style="padding: 0px 45px"><strong>Discord</strong><br />By connecting to the server(s) of Discord you agree to the following:</p>
		<ul style="padding: 0px 45px" class="square">
			<li>You agree not to harass users via messaging, actions, or private messages.</li>
			<li>You agree not to flood channels with messages</li>
			<li>You agree not to ask about an ETA (Estimated Time Of Arrival), when the server is down.</li>
			<li>If we are unable to solve your problem, you can always try the forums.</li>
		</ul>

		<hr />

		<h6 style="padding-left: 15px">Appealing a ban</h6>
		<p style="padding: 0px 15px;">All bans may be appealed on the forums, if your ban is denied do NOT post a new appeal; that is the final judgement.</p>

		<hr />

		<h6 style="padding-left: 15px">Final Conclusion</h6>
		<p style="padding: 0px 15px;">The punishment you receive from not following any or all of the rules above are at the discretion of the staff member that issues it.</p>

	</div>
	<!-- TOS BOX END -->

	<br class="clear" />
	<br />
	<button name="register" class="white full-width">I do agree to the following TOS and wish to register</button>
	<input type="hidden" name="register" value="1" /><div style="height:20px;font-size:1px;"> </div>
</form>
	<a href="?p=index"><button class="red full-width">I do not agree to the following TOS and wish to cancel</button></a>