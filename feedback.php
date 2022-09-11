<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Studio | FrimuFilms</title>
    <link rel="stylesheet" href="style_main.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body onload='document.form1.text1.focus()'>
  <nav>
    <div class="menu" id="myMenu">
      <div class="logo">
        <a id="logo" href="mainTW.html">FrimuFilms</a>
      </div>
      <ul>
        <li><a href="mainTW.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="contacts.html">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><button onclick="myFunction()" class="dropbtn">Content</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="photoLibrary.html">Photo</a>
              <a href="#about">Video</a>
            </div></li>
        <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a></li>
      </ul>
    </div>
  </nav>
  <div class="feedback-title" id="Feedback">
    <h2>Feedback</h2>
  </div>
  <div class="contacts">
    <div class="forms">
      <form action="create.php" name ="form1" method="post" class="form">
        <input type="text" placeholder="Name" name="nume" required></input>
        <input type="email" placeholder="Email" name="email"></input>
        <input type="tel" placeholder="Phone number" name="phone" required></input>
        <textarea id="subject" placeholder="Message" style="height:200px" name="message" required></textarea>
        <li class="validate">
          <input type="submit" name="validate" value="Submit" onclick="ValidateEmail(document.form1.text1)"/>
        </li>
      </form>
    </div>
  </div>
  <script src="app.js"></script>
</body>
</html>
