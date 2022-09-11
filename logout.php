<?php

session_start();

if (isset($_SESSION['user_id']))//daca var este declarata si nenula
{
	unset($_SESSION['user_id']);//distruge o variabila specifica
}

header("Location:login.php");
die;