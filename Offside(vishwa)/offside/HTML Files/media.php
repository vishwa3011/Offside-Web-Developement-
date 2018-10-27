<?php
$con = mysqli_connect("localhost","root","","offside");

if (!$con)
  {
  die('Could not connect: ' .mysqli_error($con));
  }
  else
  	echo"Connectiion successful";



$fixtures = array();

$fixtures[] = array('tid' => '11', 'tname' => 'afc bournemouth', 'lname' => 'premier league', 'day' => 'Sunday','date' =>'2018-10-7');

/*$fixtures[] = array('l_name' => '', 'time' => '', 'fixture' => '', 'day' => '','date' =>'');

$fixtures[] = array('l_name' => '', 'time' => '', 'fixture' => '', 'day' => '','date' =>'');

$fixtures[] = array('l_name' => '', 'time' => '', 'fixture' => '', 'day' => '','date' =>'');*/


foreach ($fixtures as $array) {
    $sql  = "INSERT INTO media";
    $sql .= " (`".implode("`, `", array_keys($array))."`)";
    $sql .= " VALUES ('".implode("', '", $array)."') ";
    $result = mysqli_query($con,$sql) or die(mysqli_error($con));
}

 mysqli_close($con);

   ?>