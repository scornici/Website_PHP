<?php
require_once 'connect.php';

$nume = $_POST['nume'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

mysqli_query ($connect, "INSERT INTO `feedback` (`id`, `nume`, `email`, `phone`, `message`) VALUES ( NULL, '$nume', '$email', '$phone', '$message')");

header('Location:feedback.php');
