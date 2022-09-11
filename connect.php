<?php

$dbhost = "localhost";
$dbuser = "john";
$dbpass = "yghtportomin834";
$dbname = "crud";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

if (!$connect){
    die('Nu s-a conectat la baza de date!');
}
