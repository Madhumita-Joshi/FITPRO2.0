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
			font-size: 23px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .2);
		}

		button {
			color: #4d4751;
			font-family: 'Nexa Regular', helvetica, arial, sans-serif;
			font-size: 20px;
			border: none;
			background: white;
			width: 120px;
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
			width: 450px;
			height: 54px;
			display: inline-block;
			border: none;

		}

		.button2:hover {
			color: white;
		}

		div.gallery {

			margin: 5px;
			//border: 1px solid #ccc;
			float: left;
			width: 260px;
			height: 340px;
			border-radius: 12px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0,0.2);
		}

		div.gallery:hover {
			//border: 3px solid #777;
			//opacity:0.3;
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
			top: 100%;
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

		/*
.ac-footer .ac-icon{position:absolute;left:0;right:0;width:20px;height:30px;margin:auto}

.ac-footer .ac-icon-love-dark{background:url("https://community.algolia.com/places/images/svg/icon-heart-dark-66670e8e.svg") no-repeat center center/contain}

@keyframes pulse{0%{box-shadow:0 0 0 0 rgba(251,54,110,0.4)}70%{box-shadow:0 0 0 30px rgba(251,54,110,0)}100%{box-shadow:0 0 0 0 rgba(251,54,110,0)}}

@keyframes pulseHeart{0%{transform:scale(1.3)}70%{transform:scale(1.15)}100%{transform:scale(1)}}

.ac-icon-love-dark{display:block;position:relative}

.ac-icon-love-dark:before{content:'';display:block;width:8px;height:8px;position:absolute;top:45%;bottom:0;left:50%;transform:translate(-50%, -50%);right:0;z-index:-1;border-radius:100%}

.ac-footer-container:hover .ac-icon-love-dark{animation:pulseHeart 1s ease infinite}

.ac-footer-container:hover .ac-icon-love-dark:before{animation:pulse 1s ease infinite !important
}

.ac-icon-triangle{width:0;height:0;border-top:5px solid transparent;border-bottom:5px solid transparent;border-left:5px solid #788795;position:relative;display:inline-block;margin-left:8px}

.ac-footer .ac-footer-brand:hover .ac-icon-love-dark{background:url("https://community.algolia.com/places/images/svg/icon-heart-light-fc92b1e0.svg") no-repeat center center/contain}
*/
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
	</script>
</head>

<body style="background-color: #efeef1">
	<nav class="nav">
		<i class="material-icons" style="position:absolute; left:77%;top: 5%;">search</i>
        <img src="FitPrologo.png" width="250px" height="50%">

        <span style="position:absolute; left:80%;top: 4%;border-left:6px solid white;"><button onclick="window.location.href='registration.php';">Sign Up</button></span>
        <span style="position:absolute; left:90%;top: 4%;"><button onclick="window.location.href='login page.php';">Log In<button></span>
  </nav>

  <div>
        <button class = "button2" onclick="window.location.href='login page.php';"style="position:absolute; left:0%;top:9%;" >WORKOUTS</button>
        <button class = "button2" onclick="window.location.href='login page.php.';"style="position:absolute; left:25%;top:9%;" >PROFILE</button>
        <button class = "button2" onclick="window.location.href='login page.php';" style="position:absolute; left:50%;top:9%;">BLOGS</button>
        <button class = "button2" onclick="window.location.href='login page.php';"style="position:absolute; left:75%;top:9%;">MY DUFFEL</button>
</div>

<div class="container" style="position:absolute; left:15%; top:21.5%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="goals.jpg" alt="Dogs" style="width:100%; height:550px;">
      </div>

      <div class="item">
        <img src="gym1.jpg" alt="Cats" style="width:100%; height:550px;">
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

<div ><h1 style="font-family: helvetica, arial, sans-serif;position:absolute;left:40%;top:143%;font-size:35px;color: #005F40">Finding workouts for you...</h1></div>
<div>

<div class="gallery" style="position:absolute; left:10%; top:170%;">

<a target="_blank" href="login page.php">
    <img src="yoga.jpg" alt="Yoga" width="600" height="400">
</a>
<div class="desc">YOGA</div>
</div>

<!--<i class="fa fa-heart" style="position:absolute;font-size:30px;color:white;left:27%; top:134%;">favorites</i>-->
<!--
<section class="ac-footer">
<br><div class="ac-footer-container ac-footer-brand" style="position:absolute; left:28%; top:134%;">
     <span class="ac-icon ac-icon-love-dark"></span>
  </div>
</section>
-->
<div class="gallery" style="position:absolute; left:31%; top:170%;">
  <a target="" href="login page.php">
    <img src="trainer.jpg" alt="HIIT" width="600" height="400">
  </a>
  <div class="desc">HIIT</div>
</div>

<div class="gallery" style="position:absolute; left:52%; top:170%;">
  <a target="_blank" href="login page.php">
    <img src="trx.jpg" alt="TRX" width="600" height="400">
  </a>
  <div class="desc">TRX</div>
</div>


<div class="gallery" style="position:absolute; left:73%; top:170%;">
   <a target="_blank" href="login page.php">
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
