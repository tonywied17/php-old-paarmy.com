<?php
require_once 'config.php';

$dbase = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check connection
if (!$dbase) {
  die("Connection failed: " . mysqli_connect_error());
}

date_default_timezone_set('US/Eastern');
$USdatetime = new DateTime('tomorrow');
$UStoday = date('l');
$UStomorrow = $USdatetime->format('l');

date_default_timezone_set('US/Eastern');
$EUdatetime = new DateTime('tomorrow');
$EUtoday = date('l');
$EUtomorrow = $EUdatetime->format('l');



$todayQueryUS = "SELECT id, day, type FROM usUpcoming WHERE day='" . $UStoday . "'";
$todayQueryEU = "SELECT id, day, type FROM euUpcoming WHERE day='" . $EUtoday . "'";
$tomorrowQueryUS = "SELECT id, day, type FROM usUpcoming WHERE day='" . $UStomorrow . "'";
$tomorrowQueryEU = "SELECT id, day, type FROM euUpcoming WHERE day='" . $EUtomorrow . "'";

$TODAYqueryResultUS = mysqli_query($dbase, $todayQueryUS);
$TOMORROWqueryResultUS = mysqli_query($dbase, $tomorrowQueryUS );
$TODAYqueryResultEU = mysqli_query($dbase, $todayQueryEU);
$TOMORROWqueryResultEU = mysqli_query($dbase, $tomorrowQueryEU);

//exit(json_encode($result));

if ($TODAYqueryResultUS) {
  
  while($row = mysqli_fetch_array($TODAYqueryResultUS)) {
	  $day = $row['day'];
      $type = $row['type'] . " <sup>[NA]</sup>";;
  }
}

$todayDATAUS = "<h3><i  class='fa-solid fa-calendar-day' style='color: #47242e;margin-right: 0.4em;font-size: 1.5rem;'></i> " . $day . "</h3>" . $type;

if ($TOMORROWqueryResultUS) {
  
  while($row = mysqli_fetch_array($TOMORROWqueryResultUS)) {
	  $day = $row['day'];
      $type = $row['type'] . " <sup>[NA]</sup>";;
  }
}

$tomorrowDATAUS = "<h3><i class='fa-solid fa-calendar-day' style='color: #47242e;margin-right: 0.4em;font-size: 1.5rem;'></i> " . $day . "</h3>" . $type;

if ($TODAYqueryResultEU) {
  
  while($row = mysqli_fetch_array($TODAYqueryResultEU)) {
      $type = $row['type'] . " <sup>[EU]</sup>";
  }
}

$todayDATAEU = $type;

if ($TOMORROWqueryResultEU) {
  
  while($row = mysqli_fetch_array($TOMORROWqueryResultEU)) {
      $type = $row['type'] . " <sup>[EU]</sup>";
  }
}

$tomorrowDATAEU = $type;

$exitDATA = $todayDATAUS . $todayDATAEU . "</p>" . $tomorrowDATAUS . $tomorrowDATAEU . "</p>";
			
exit($exitDATA);

?>
