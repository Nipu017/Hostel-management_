<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hostel_management";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
  die("Failed to connect");
}
 ?>
