<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>HIIT</title>
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
        <button class = "button2" onclick="window.location.href='Profile.php.';"style="position:absolute; left:25%;top:13%;" >PROFILE</button>
        <button class = "button2" onclick="window.location.href='Nutrition.php';"style="position:absolute; left:50%;top:13%;">BLOGS</button>
        <button class = "button2" onclick="window.location.href='Duffel.php';"style="position:absolute; left:75%;top:13%;">MY DUFFEL</button>
</div>
   <div class="img">
   <center><img src="HIIT.jpg" width=80%;height=550px;></center>
   <br>
   <center><div class ='title'> <strong> HIIT </strong></div> </center>
   <div class= 'content'>
<p>High-intensity interval training (HIIT) involves short, intense workouts. You give a series of exercises your full effort for short bursts of 30 to 60 seconds, and follow it with an even shorter period of rest. While exercising with this type of maximum effort is difficult, it does wonders for your health.</p>
<p>"It's exercise after exercise with minimal rest," says personal trainer Stephen Navaretta, developer of The Tank Method, an exercise program based on body-weight exercises. "This gives your entire body, especially your heart and core, a great workout." </p>
</div>
<div class='heading'>1. HIIT can help you burn more calories</div>
<div class= 'content'>
<p>While you're doing a HIIT workout, you're burning about the same amount of calories as you would during a typical workout like running. However, you burn more calories after a HIIT workout than you do during a steady-state cardio exercise like running, where your heart rate remains relatively stable.
</p>
</div>
<div class='heading'>2. HIIT may help you lose weight</div>
<div class= 'content'>
<p>Since HIIT burns more calories because of EPOC, it can be a more convenient way to help you lose weight, since you don't have to spend as much time working out. </p>

<p>A 2019 review in The British Journal of Sports Medicine analyzed 77 scientific studies. The review found that people who did HIIT workouts lost 28.5% more fat than people who did moderately-intense continuous exercise, like running.
</p>
</div>
<div class='heading'>3. HIIT builds many muscle groups  </div>
<div class= 'content'>
<p>Most HIIT workouts involve many different movements. This allows you to work out different groups of muscle during the same workout — for example, a HIIT workout might have you do squats, push-ups, and burpees — which all target different muscles. </p>

<p>The intensity will also help build your muscles and improve their ability to keep working out. "This type of training boosts muscular endurance because the muscles don't get much rest," Navaretta says. </p>

<p>For example, a 2017 study published in Endocrine Connections found that a six-week HIIT program improved muscle power in men, measured by peak power output (PPO). Before the HIIT program, the mens' average absolute PPO was 799 watts, and after the workout it was 865 watts, an increase of about 8%.
</p>
</div>
<div class='heading'>4. HIIT improves oxygen and blood flow </div>
<div class= 'content'>
<p>Your heart pumps blood through the circulatory system in order to deliver oxygen and nutrients to your muscles. And research has found lots of evidence that HIIT workouts can support and even strengthen your circulatory system. </p>

<p>For example, a 2017 study published in the journal Science and Sport split 26 school children into two groups: one group engaged in HIIT training, and one did a more traditional exercise regimen. The study lasted seven weeks. The HIIT group improved their cardiorespiratory capacity, or the ability of their heart and lungs to deliver oxygen to the body, more than the traditional exercise group, and also lost more fat. </p>

</p>In addition, a 2020 study published in the journal of the Federation of American Societies for Experimental Biology found that just one HIIT session improved blood flow to the brain, saying "HIIT is an effective time‐efficient alternative to long‐duration lower‐intensity exercise that offers similar vascular benefits."</p>

</div>
<div class='heading'>5. HIIT can help lower blood pressure and blood sugar </div>
<div class= 'content'>
<p>HIIT workouts can have many lasting overall health impacts. For example, they can help lower your blood pressure and blood sugar, both of which are risk factors for heart disease. </p>

<p>A 2017 study published in Experimental Gerontology followed 39 men ages 56 to 67 who performed a HIIT workout five days a week for six weeks. At the end of the study, the group had "clinically relevant improvements in blood pressure" — an average reduction of about 5.5 mm/HG. </p>

<p>In addition, a 2017 study published in the European Journal of Applied Physiology found that a session of HIIT resulted in a more immediate reduction in blood pressure than a session of steady-state cardio.</p>
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
