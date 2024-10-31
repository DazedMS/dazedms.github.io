<?php
declare(strict_types=1);

require("config/config.php");

/** @var array $v */
/** @var Mysqli $mysqli */
$pingIP = $_SERVER['REMOTE_ADDR'];
if (!in_array($pingIP, $v['authorized_ips'])) {
    // Log attempt to log file, maybe gtop100 uses a new ip?
    error_log(sprintf("\nIP: '%s' tried to use pingback but was blocked.", $pingIP), 3, "./pingback-block.log");
    http_response_code(404);
    exit;
}

// Fetch and escape string.
$voterIp = $_POST['VoterIP'] ?? '';
$voterIp = $mysqli->real_escape_string($voterIp);

// Fetch and abs.
$success = abs((int) $_POST['Successful'] ?? 0);

// Fetch and escape string.
$reason = $_POST['Reason'] ?? '';
$reason = $mysqli->real_escape_string($reason);

// Fetch and escape string.
$pingUsername = $_POST['pingUsername'] ?? '';
$pingUsername = $mysqli->real_escape_string($pingUsername);

// Create earlier vote select and execute.
$earlierVotesQuery = sprintf("SELECT * FROM votes WHERE account = '%s' ORDER BY `date` DESC", $pingUsername); // order by date to get latest voting time.
$earlierVotesQueryResult = $mysqli->query($earlierVotesQuery);

if ($earlierVotesQueryResult->num_rows > 0) { // earlier vote found based on account.
    $latestVoteValue = $earlierVotesQueryResult->fetch_array();

    $timeSinceLastVote = time() - $latestVoteValue['date'];
    if ($timeSinceLastVote < $v['vote_time']) { // Get vote_time value from config.
        exit; // last vote wasn't at least 6 hours ago, ignore ping back.
    }
}

// Create vote query based on ip and account.
$voteQuery = sprintf("SELECT id FROM votes WHERE ip = '%s' AND account = '%s' LIMIT 1", $voterIp, $pingUsername);
$voteQueryResult = $mysqli->query($voteQuery);

// First time with this IP and account combination.
if ($voteQueryResult->num_rows < 1) {
    $newVoteQuery = sprintf(
        "INSERT INTO votes (ip, account, `date`, times) VALUES ('%s', '%s', '%s', '%s')",
        $voterIp,
        $pingUsername,
        time(),
        1
    ); // Add new vote based on ip and account.

    $mysqli->query($newVoteQuery);

// Voted before with this IP and account combination.
} else {
    $voteQueryResultValue = $voteQueryResult->fetch_array();

    $updateVoteQuery = sprintf(
        "UPDATE votes SET times = times + 1, date = '%s' WHERE id = '%s';",
        time(),
        $voteQueryResultValue['id']
    );

    $mysqli->query($updateVoteQuery);
}

$rewardQuery = sprintf(
    "UPDATE accounts set paypalNX = paypalNX + %s, votepoints = votepoints + %s where name = '%s'",
        $v['nx_award'],
        $v['votepoints_award'],
        $pingUsername
);
$mysqli->query($rewardQuery);
$mysqli->close();