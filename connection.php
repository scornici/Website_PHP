<?php

$dbhost = "localhost";
$dbuser = "john";
$dbpass = "yghtportomin834";
$dbname = "login";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

if (!$con){
    die('Nu s-a conectat la baza de date!');
}
