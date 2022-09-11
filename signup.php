<?php
session_start();

	include("connection.php");
	include("functions.php");


	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//ceva a fost postat
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if (!empty($user_name) && !empty($password) &&  !is_numeric($user_name))
		{
			// salvam in baza de date

			$user_id = random_num(20);
			$query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name','$password')";

			mysqli_query($con ,$query);


			header("Location:login.php");
			die;

		}
		else
		{
			echo "Enter valide data!!!";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<title>Signup</title>
	<style type="text/css">
	body {
  background-image: url('main2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

    #text{

		height: 45px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;

	}

	#button{
		  height: 55px;
		  width: 170px;
		  border-radius: 5px;
		  border: white;
		  margin: 0 10px;
		  border: 2px solid white;
		  font-size: 20px;
		  font-weight: 500;
		  padding: 0 10px;
		  cursor: pointer;
		  outline: none;
		  transition: all 0.3s ease;
		}

	}
	#button:hover{
		background-color: white;
	}

	#box{
		margin-left: 450px;
    position: relative;
		background-color: transparent;
		margin-top: 100px;
		text-align: center;
		font-size: 25px;
		width: 500px;
		height:300px;
		padding: 20px;
		border-radius: 10px;

	}

	</style>
</head>
<body>

	<div id="box">
		<form method="post">
		<div style="font-size: 80px; font-family: 'Poppins'; font-weight: bolder; margin: 10px; color: ivory; -webkit-text-stroke: 0.5px black;">Signup</div>
			<input id="text" type="text" name="user_name"> <br><br>
			<input id="text" type="password" name="password"> <br><br>
			<input id="button" type="submit" value="Signup"> <br><br>

			<a style ="border-radius: 5px;
		  margin: 0 10px;
		  border: 2px solid white;
			background-color: white;
			text-decoration: none;
			color:black;
			font-family: 'Poppins';
			font-size: 20px;
		  padding: 0 10px;
		  cursor: pointer;" href="login.php">Login</a>
		</form>
	</div>

</body>
</html>
