<?php
session_start();

     include("connection.php");
	   include("functions.php");

	$user_data = check_login($con);
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Studio | FrimuFilms</title>
    <link rel="stylesheet" href="style_main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body>
  <nav>
    <div class="menu" id="myMenu">
      <div class="logo">
        <a id="logo" href="mainTW.php">FrimuFilms</a>
      </div>
      <ul>
        <li><a href="mainTW.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="contacts.html">Contact</a></li>
       	<li><a href="feedback.php">Feedback</a></li>
        <!-- <li><button onclick="myFunction()" class="dropbtn">Content</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="photoLibrary.html">Photo</a>
              <a href="#about">Video</a>
            </div></li> -->
        <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a></li>
  <li><a href ="logout.php"><span class="glyphicon glyphicon-log-out"></span>
  </a></li>
      </ul>
    </div>
  </nav>
  <div class="img_main"></div>
  <div class="center">
    <div class="title">Studio of video and photo productions</div>
    <div class="sub_title">Based in Chisinau</div>
    <div class="btns">
      <a href="about.html">
        <button>Learn More</button></a>
      <a href="https://www.shutterstock.com/g/FrimuFilms/video" target="_blank">
				<button>Shutterstock</button></a>
    </div>
  </div>
  <script src="app.js"></script>
</body>
</html>
