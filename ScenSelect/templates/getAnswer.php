<?php
$user = 'root';
$password = 'root';
$db = 'POWER';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

$ScenNumber = $_GET["Scenario"];
$QNumber = $_GET["A"];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query = "SELECT `A1Desc`, `A1Pts`, `A2Desc`, `A2Pts`, `A3Desc`, `A3Pts`, `A4Desc`, `A4Pts`, `CorrectA` FROM `Answers".$ScenNumber."` WHERE `QNumber` = ".$QNumber;

  $result = mysqli_query($link, $query);
  $row=mysqli_fetch_array($result);
  echo json_encode($row);


  /* free result set */
  mysqli_free_result($result);

  /* close connection */
  mysqli_close($link);

?>
