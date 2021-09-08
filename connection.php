<?php

$host="localhost";
$username="root";
$password="";
$db="sheleedb";

$mysqli = mysqli_connect($host,$username,$password,$db) or die("unable to connet");

$t = date("H");

?>
