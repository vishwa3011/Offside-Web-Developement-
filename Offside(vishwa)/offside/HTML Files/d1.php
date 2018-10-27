<?php
$con = mysqli_connect("localhost","root","","offside");

if (!$con)
  {
  die('Could not connect: ' .mysqli_error($con));
  }
  else
  	echo"Connectiion successful";



$fixtures = array();

$fixtures[] = array('l_name' => 'Premier League', 'time' => '19:30:00', 'fixture' => 'brighton & hove albion vs newcastle united', 'day' => 'Saturday','date' =>'2018-10-20');

$fixtures[] = array('l_name' => 'Premier League', 'time' => '19:30:00', 'fixture' => 'cardiff city vs fulham', 'day' => 'Saturday','date' =>'2018-10-20');
$fixtures[] = array('l_name' => 'Premier League', 'time' => '19:30:00', 'fixture' => 'manchester city vs burnley', 'day' => 'Saturday','date' =>'2018-10-20');
$fixtures[] = array('l_name' => 'Premier League', 'time' => '19:30:00', 'fixture' => 'west ham vs tottenham hotspurs', 'day' => 'Saturday','date' =>'2018-10-20');
$fixtures[] = array('l_name' => 'Premier League', 'time' => '19:30:00', 'fixture' => 'bournmouth vs southampton', 'day' => 'Saturday','date' =>'2018-10-20');
$fixtures[] = array('l_name' => 'Premier League', 'time' => '19:30:00', 'fixture' => 'wolves vs watford', 'day' => 'Saturday','date' =>'2018-10-20');
$fixtures[] = array('l_name' => 'Premier League', 'time' => '22:00:00', 'fixture' => 'huddersfield vs liverpool', 'day' => 'Saturday','date' =>'2018-10-20');
$fixtures[] = array('l_name' => 'Premier League', 'time' => '20:30:00', 'fixture' => 'everton vs crystal palace', 'day' => 'Saturday','date' =>'2018-10-21');
$fixtures[] = array('l_name' => 'Premier League', 'time' => '00:30:00', 'fixture' => 'arsenal vs leicester city', 'day' => 'Saturday','date' =>'2018-10-23');





foreach ($fixtures as $array) {
    $sql  = "INSERT INTO fixtures";
    $sql .= " (`".implode("`, `", array_keys($array))."`)";
    $sql .= " VALUES ('".implode("', '", $array)."') ";
    $result = mysqli_query($con,$sql) or die(mysqli_error($con));
}

 mysqli_close($con);

   ?>

