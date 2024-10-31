	<div class="paragraph">
		<center>
		<p>
<?php
	if (@$_POST["doVote"] === "1") {
	    // Add some phpdoc explanations for IDE inspections.
        /** @var Mysqli $mysqli */
        /** @var array $host */
        /** @var array $v */

        $error = false;
        $account = $_POST['name'];
        $account = $mysqli->real_escape_string($account);

        if($_POST["name"] == "") {
            echo '<div class="alert-box red">Please fill in the correct account credentials.</div>';
            $error = true;
        }

        if (!$error) {
            $accountQuery = sprintf("SELECT * FROM accounts WHERE name = '%s' LIMIT 1", $account);
            $accountQueryResult = $mysqli->query($accountQuery);
            $info = $accountQueryResult->fetch_assoc();

            if ($accountQueryResult->num_rows < 1) {
                echo '<div class="alert-box red">Please fill in the correct account credentials.</div>';
                $error = true;
            }

            if (!$error) {
                if ($info["loggedin"] > 0) {
                    echo '<div class="alert-box red">You must be logged out to vote for rewards.</div>';
                    $error = true;
                }

                if (!$error) {
                    $earlierVotesQuery = sprintf("SELECT * FROM votes WHERE account = '%s' ORDER BY `date` DESC", $account); // order by date to get latest voting time.
                    $earlierVotesQueryResult = $mysqli->query($earlierVotesQuery);

                    if ($earlierVotesQueryResult->num_rows > 0) { // earlier vote found based on account.
                        $latestVoteValue = $earlierVotesQueryResult->fetch_array();

                        $timeSinceLastVote = time() - $latestVoteValue['date'];
                        if ($timeSinceLastVote < $v['vote_time']) { // Get vote_time value from config.
                            echo '<div class="alert-box red">You can only vote once every 24 hours.</div>';
                            $error = true;
                        }
                    }

                    if (!$error) {
                        $mysqli->close(); // We no longer need mysqli and we will exit in a bit. Close it now.
                        unset($_SESSION['vote_err']); // Unset session errors.

                        echo '<script type="text/javascript">window.location.replace("' . $v["gtop"] . '&pingUsername='.$account.'")</script>';
                        exit(); // do not allow further executing of code.
                    }
                }
            }
        }

        $mysqli->close();
    }
?>
			<form action="" method="POST">
			<strong>	VOTE AND RECIEVE 10K NEXON CASH! LOG OUT WHEN VOTING FOR SAFETY!  </strong>
			<br>
				BY VOTING FOR <STRONG>DIVERSITY,</STRONG> IT HELPS SUPPORT THE SERVER AND WE APPRECIATE THAT!
				<br>
				<br>
				<font size="5">Account Name:</font><input type=text name=name maxlength="12">
			    <input type="image" src="images/tools/vote.png" class="submit" name="doVote" value="1"/><br/>
				<input type="hidden" name="doVote" value="1" />
				<br>
				</form>
				<h4><strong> TIP: </strong> YOU CAN ONLY VOTE ONCE A DAY!</h4>
				<br><br>
			<br>
				<input type="image" src="images/tools/Mushmom.gif"/><br/>
		</center>
		</p>
	</div></div>