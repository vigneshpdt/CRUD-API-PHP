<?php

$DBhost = "localhost";
$DBuser = "root";
$DBpassword ="";
$DBname = "ecomm";

$connection = mysqli_connect($DBhost, $DBuser, $DBpassword, $DBname);

if(!$connection)
{
	die("connection failed : " . mysqli_connect_error());
}
else
 {
 echo("connected successfully");
  }
?>