<?php
require_once 'connect.php';

$id = $_POST['id'];
$nume = $_POST['nume'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

mysqli_query ($connect, "UPDATE `feedback` SET `nume` = '$nume', `email` = '$email', `phone` = '$phone', `message` = '$message' WHERE `feedback`.`id` = '$id'");

header('Location:server.php');
