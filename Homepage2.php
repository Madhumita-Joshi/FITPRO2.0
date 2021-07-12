<?php
if(!isset($_SESSION["sess_user"])){
session_start();
}
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>FitPro- Taller Sharper Stronger</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.nav {
			background-color: white;
			color: #005F40;
			font-family: 'Nexa Regular', helvetica, arial, sans-serif;
			font-size: 18px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .2);
		}

		button {
			color: #4d4751;
			font-family: 'Nexa Regular', helvetica, arial, sans-serif;
			font-size: 18px;
			border: none;
			background: white;
			width: 170px;
			text-align: center;
			display: inline-block;
		}

		.button:hover {
			color: #005F40;
		}

		.button2 {
			color: #E6E6FA;
			background: #005F40;
			font-family: 'Nexa Regular', helvetica, arial, sans-serif;
			font-size: 17px;
			text-align: center;
			width: 338px;
			height: 54px;
			display: inline-block;
			border: none;

		}

		.button2:hover {
			color: white;
		}

		div.gallery {

			margin: 5px;
			float: left;
			width: 260px;
			height: 340px;
			border-radius: 12px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0,0.2);
		}

		div.gallery:hover {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		div.gallery img {
			width: 100%;
			height: 85%;
			border-radius: 12px;
		}

		div.desc {
			font-family: helvetica, arial, sans-serif;
			font-size: 20px;
			font-weight: 740;
			color: #005F40;
			padding: 12px;
			text-align: center;
		}

		.welcome {
			position: absolute;
			top: 125%;
			text-align: center;
			padding-left: 5%;
			padding-right: 5%;
			padding-bottom: 2%;
			padding-top: 2%;
			font-size: 24px;
			background-color: white;
			color: #005F40;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .2);
		}

	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
	</script>
</head>

<body style="background-color: #efeef1">
	<div class="nav">
		<i class="material-icons" style="position:absolute; left:79%;top: 5%;">search</i>
        <img src="FitPrologo.png" width="250px" height="50%">
        <span style="position:absolute; left:84%;top: 5%;"><button><?=$_SESSION['sess_user'];?><button></span>
       </div>
	   <div>
        <button class = "button2" onclick="window.location.href='http://localhost/FITPRO2.0/Workouts.php';"style="position:absolute; left:0%;top:13%;" >WORKOUTS</button>
        <button class = "button2" onclick="window.location.href='Profile.php';"style="position:absolute; left:25%;top:13%;" >PROFILE</button>
        <button class = "button2" onclick="window.location.href='Nutrition.php';"; style="position:absolute; left:50%;top:13%;">BLOGS</button>
        <button class = "button2" onclick="window.location.href='Duffel.php';" style="position:absolute; left:75%;top:13%;">MY DUFFEL</button>
</div>

<div class="container" style="position:absolute; left:8%; top:22%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="goals.jpg" alt="Gym" style="width:100%; height:550px;">
      </div>

      <div class="item">
        <img src="gym1.jpg" alt="Gym" style="width:100%; height:550px;">
      </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<center>
<div class="welcome">
  <p>
    <h2><b>WELCOME TO FITPRO!</b></h2>
    <p style="font-size:16px;">Starting a fitness routine can be intimidating, but it helps to have an idea of what to expect before joining any class. Across our nationwide portfolio of properties we provide group fitness with, we offer an array of different group fitness class types to meet the dynamic needs of our communities. If you are just getting comfortable with the idea of a group fitness class, keep in mind, there is never a one-size-fits all. If you tried one type of class and didn’t love it, there’s likely another fitness class that might be a game-changer for you. We’ve listed the top 10 most popular types of classes requested across our platform, and broken down what you can expect if you attend a class like this in your community.
</p>
  </p>
</div>
</center>

<div ><h1 style="font-family: helvetica, arial, sans-serif;position:absolute;left:35%;top:173%;font-size:35px;color: #005F40">Finding workouts for you...</h1></div>
<div>

<div class="gallery" style="position:absolute; left:10%; top:192%;">
<a target="_blank" href="Yoga.php">
    <img src="yoga.jpg" alt="Yoga" width="600" height="400">
</a>
<div class="desc">YOGA</div>
</div>

<div class="gallery" style="position:absolute; left:31%; top:192%;">
  <a target="_blank" href="Hiit.php">
    <img src="trainer.jpg" alt="HIIT" width="600" height="400">
  </a>
  <div class="desc">HIIT</div>
</div>

<div class="gallery" style="position:absolute; left:52%; top:192%;">
  <a target="_blank" href="trx.php">
    <img src="trx.jpg" alt="TRX" width="600" height="400">
  </a>
  <div class="desc">TRX</div>
</div>


<div class="gallery" style="position:absolute; left:73%; top:192%;">
  <a target="_blank" href="Kick boxing.php">
    <img src="Kickboxing.jpg" alt="Kickboxing" width="600" height="400">
  </a>
  <div class="desc">BOXING</div>
</div>
</div>
<center>

<div style="position:absolute; top: 268%; width: 100%;height:100px; background-color:#005F40; color:white; font-size:14px;">
  <br><br>
<p> Copyright © 2021 FitPro. All rights reserved | Terms and Conditions | Privacy Policy </p>
</div>
</center>
</body>
</html>
