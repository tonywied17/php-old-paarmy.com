<?php
require_once 'config.php';

$dbase = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check connection
if (!$dbase) {
  die("Connection failed: " . mysqli_connect_error());
}

$tz = $_GET['tz'];
$query = "SELECT day, type FROM " . $tz;

$queryResult = mysqli_query($dbase, $query);

//exit(json_encode($result));

if ($queryResult) {
  
  while($row = mysqli_fetch_array($queryResult)) {
	  $day = $row['day'];
      $type = $row['type'];

	print "<h4 style=\"margin-top:1em;margin-bottom:0.2em;\">$day</h4>
		  <ul style=\"list-style-type: none;\">
			$type
		  </ul>";


  }
}

?>