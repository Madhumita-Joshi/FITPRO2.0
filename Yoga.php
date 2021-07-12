<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Yoga</title>
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


  .title{
        background-color:white;
        margin: 0;
       font-family:roboto;
       color: #005F40;
       font-size: 35px;
       padding: 37px;
    }

.content {
  font-size: 18px;
  padding:20px;
  color: #005F40;
  padding-left: 150px;
  padding-right: 150px;
}
.heading{
   font-size: 22px;
   color: #005F40;
   padding-left: 150px;
   padding-right: 150px;
 }
 .footer{
	 position:absolute;
	 width: 100%;
	 height:100px;
	 background-color:#005F40;
	 color:white;
	 font-size:14px;
}
</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
	</script>
</head>

<body style="background-color: #efeef1">
	<div class="nav">
		<i class="material-icons" style="position:absolute; left:71%;top: 5%;">search</i>
        <img src="FitPrologo.png" width="250px" height="50%">
        <span style="position:absolute; left:73%;top: 5%;border-left:6px solid white;"><button onclick="window.location.href='Homepage2.php';">Home</button></span>
        <span style="position:absolute; left:85%;top: 5%;"><button><?=$_SESSION['sess_user'];?><button></span>

  </div>
<div>
        <button class = "button2" onclick="window.location.href='Workouts.php';"style="position:absolute; left:0%;top:13%;" >WORKOUTS</button>
        <button class = "button2" onclick="window.location.href='Profile.php';"style="position:absolute; left:25%;top:13%;" >PROFILE</button>
        <button class = "button2" onclick="window.location.href='Nutrition.php';"style="position:absolute; left:50%;top:13%;">BLOGS</button>
        <button class = "button2" onclick="window.location.href='Duffel.php';"style="position:absolute; left:75%;top:13%;">MY DUFFEL</button>
</div>
   <div class="img">
   <center><img src="yogapage.jpg" width=80%;height=550px;></center>
   <br>
   <center><div class ='title'> <strong> YOGA </strong></div> </center>
   <div class= 'content'>
<p>You've probably heard by now that yoga is good for you. Maybe you've even tried it and discovered that it makes you feel better. A consistent practice offers all kinds of mental and physical health benefits. Some, like improved flexibility, are clearly evident.
</p>
<p>Others, including mental clarity and stress reduction, may be more subtle but are just as powerful. When putting together, all the benefits below contribute to an increased feeling of well-being, which helps explain why so many people find yoga so addictive.
</p>
</div>
<div class='heading'>1. Improves Flexibility </div>
<div class= 'content'>
<p>Moving and stretching in new ways will help you become more flexible, bringing a greater range of motion to tight areas. Over time, you can expect to gain flexibility in your hamstrings, back, shoulders, and hips. As we age, our flexibility usually decreases, especially if you spend a lot of time sitting, which leads to pain and immobility. Yoga can help reverse this process.
</p>
</div>
<div class='heading'>2. Builds Strength </div>
<div class= 'content'>
<p>Many yoga poses require you to bear your body weight in new ways, including balancing on one leg (as in tree pose) or supporting yourself with your arms (as in downward facing dog). Holding these poses over the course of several breaths helps build muscular strength.
</p>
</div>
<div class='heading'>3. Increases Muscle Tone </div>
<div class= 'content'>
<p>As a by-product of getting stronger, you can expect to see increased muscle tone. Yoga helps shape long, lean muscles in your legs, arms, back, and abdomen.
</p>
</div>
<div class='heading'>4. Improves Balance </div>
<div class= 'content'>
<p>Improved balance is one of the most important benefits of yoga as you get older. Poses where you stand on one leg and, for more advanced students, inversions, are great ways to build the core strength that keeps you upright.
</p>
</div>
<div class='heading'>5. Supports Joint Health </div>
<div class= 'content'>
<p>The movements necessary for yoga are low impact, allowing you to use your joints without injuring them. Yoga also helps strengthen the muscles around the joints, lessening their load. People with arthritis often see a marked improvement in their pain and mobility with regular gentle yoga practice.
</p>
</div>
<br><br>
<center>
<div class='footer'>
  <br><br>
<p> Copyright © 2021 FitPro. All rights reserved | Terms and Conditions | Privacy Policy </p>
</div>
</center>
</body>
</html>
