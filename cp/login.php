<?php
if(basename($_SERVER["PHP_SELF"]) == "login.php"){die("Error!");}

echo '
	<form method="POST" action="?p=doLogin">
						<h3 class="highlight2">Control Panel</h3>
						<input class="input" type="text" name="cpuser" maxlength="12" autocomplete="off" placeholder="Username" required />
						<input class="input" type="password" name="cppass" maxlength="12" placeholder="Password" required />
						<input class="button normal" type="submit" name="cpsubmit" value="LOGIN"  /> <a class="button normal" href="?p=register" style="text-decoration: none;"><div class=\"btn\">Register Today!</div></a>
					</form>				
	';
?>