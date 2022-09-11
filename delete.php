<?php

require_once 'connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `feedback` WHERE `feedback`.`id` = '$id'");

header("Location:server.php");
