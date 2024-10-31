<?php
if(isset($_SESSION['id'])) {
	session_destroy();
	echo "<META HTTP-EQUIV=Refresh CONTENT=\"0; URL=?page=home\">";
} else {
	echo "<center>You are not logged in.</center>";
}
?>