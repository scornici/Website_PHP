<?php
session_start();

	include("connection.php");
	include("functions.php");

	if ($_SERVER['REQUEST_METHOD']=="POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if (!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			// citim din baza de date

			$query = "select * from users where user_name = '$user_name' limit 1";

			$result = mysqli_query($con ,$query);

			if ($result)
			{
				if ($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);//returneaza o linie ca un array asociativ
					if ($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:mainTW.php");
						die;
					}


				}
			}
echo '<span style="color:white;text-align:center;">Wrong user name or password!</span>';


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
	<title>Login</title>
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
			<div style="font-size: 80px; font-family: 'Poppins'; font-weight: bolder; margin: 10px; color: ivory; -webkit-text-stroke: 0.5px black;">Login</div>
			<input id="text" type="text" name="user_name"> <br><br>
			<input id="text" type="password" name="password"> <br><br>
			<input id="button" type="submit" value="Login"> <br><br>
			<a style ="
		  border-radius: 5px;
		  margin: 0 10px;
		  border: 2px solid white;
			background-color: white;
			text-decoration: none;
			color:black;
			font-family: 'Poppins';
			font-size: 20px;
		  padding: 0 10px;
		  cursor: pointer;
		 " href="signup.php">Signup</a><br><br>
		</form>
	</div>

</body>
</html>
