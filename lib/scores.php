<?php

require_once 'config.php';

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$r = $_GET['r'];
$query = "SELECT * FROM topScores WHERE rifle LIKE '" . $r . "' ORDER BY score DESC, timestamp ASC LIMIT 3";

$queryResult = mysqli_query($con, $query);

//exit(json_encode($result));

if ($queryResult) {
  while($row = mysqli_fetch_array($queryResult)) {
	  $nickname = $row['nickname'];
      $score = $row['score'];
      $date = $row['timestamp'];

	print "<p><span style='color:#761912'>$score</span> - $nickname $date</p>";

  }

}

?>