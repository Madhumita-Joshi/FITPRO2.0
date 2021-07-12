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
   <center><img src="kickboxing2.jpg" width=80%;height=550px;></center>
   <br>
   <center><div class ='title'> <strong> Kick Boxing </strong></div> </center>
   <div class= 'content'>
<p>Have you ever watched kickboxing on television or maybe even at a live event? It looks pretty fun doesn’t it, and maybe a little dangerous too, but don’t worry because it doesn’t have to be dangerous. You or your children don’t actually have to engage in kickboxing competitions, but you can always engage in all of the training that comes with it, training that is definitely very valuable.</p>

<p>The benefits of kickboxing are nearly endless and they go a long way in creating a stronger, faster, healthier, and more confident you, not to mention that it teaches you how to defend yourself as well. Kickboxing is a fantastic martial art that teaches you a whole lot of things and leaves you a much healthier person at the end of the day.</p>
</div>
<div class='heading'>1. Learn How To Defend Yourself </div>
<div class= 'content'>
<p>Something that everyone will definitely be able to appreciate about kickboxing is that it is one of the best things to know in terms of self-defense. Kickboxing is a very versatile martial art that teaches you many basics, especially when it comes to striking with your hands and feet.</p>

<p>Nobody wants to be bullied in school, or even worse, in adulthood, and nobody wants to be robbed or mugged on the street, and nobody wants to be confronted in a dark alleyway without the means to defend themselves.</p>

<p>Well, kickboxing is probably one of the best things to know if you really want to be able to defend yourself versus a bully, attacker, or someone putting unwanted hands on you. Nothing will deter those bad people quicker than a swift kick to the head.</p>

</div>
<div class='heading'>2. Building Stronger Muscles – A Full Body Workout </div>
<div class= 'content'>
<p>Perhaps one of our favorite parts about participating in some regular kickboxing classes is that it will help you become very strong very quickly. All of that striking that you do with your feet and your hands definitely uses your muscles, and not just a little bit either. Punching and kicking will no doubt make your muscles very big and strong, but that still is not everything.</p>


<p>
There is a lot more than just striking when you engage in martial arts like kickboxing. Training for this fantastic martial art means doing sit ups, pushups, planks, running, jumping rope, and so much more. There are a whole lot of resistance exercises, weight training exercises, and isometric exercises that you need to do in kickboxing in order to really train the way that professionals train.</p>

</p>All of these things will go a very long way in giving you those muscles that you have always wanted. Kickboxing is great because the sport itself plus all of the training that you do for it will strengthen, tone, and enlarge literally every single muscle in your body.</p>
</div>
<div class='heading'>3. Relieving Stress & Rage </div>
<div class= 'content'>
<p>The next thing that we really like about kickboxing is that it is a fantastic way to relieve pent-up rage and stress. Don’t go to a therapist or an anger management class when you could spend your time and anger kicking and punching a 300-pound bag. There is really no better way to relieve all of your anger than by getting a little violent and crazy.</p>

<p>Of course, once again, we are not advocating that you go beating on people like bullies in school, but striking a bag or training dummy, or even competing sanctioned kickboxing competitions with real people, is definitely a legitimate and legal way to get rid of your weekly anger.</p>

<p>Moreover, not only is kickboxing a good way to relieve anger, but also to relieve stress. Life can be pretty stressful, not to mention that daily events can cause a whole lot of anxiety and depression, but not to worry because those are all things that kickboxing can take care of with ease. This is in fact not thanks to being able to hit stuff really hard, but because of the nature of exercise in general.</p>

<p>You see, depression can be caused by chemical imbalances in your brain, or by a lack of some important neurochemicals. Well, exercising is a natural way to induce your brain to create these chemicals. Dopamine, serotonin, and endocannabinoids are all different neurochemicals that your brain produces in excess when you exercise really hard.

These different chemicals, when put together, have the ability to relieve the effects of stress, depression, anxiety, and general melancholy. Feelings of happiness and relaxation are a big part of exercising on a regular basis and it’s something that you may know as the runner’s high.</p>
</p>
</div>
<div class='heading'>4. Increasing Your Flexibility & Balance </div>
<div class= 'content'>
<p>Another really great thing that kickboxing can do for you is to help increase your flexibility. No, the act of kickboxing itself will not really make you more flexible, but that is not true for the things you do before and after a kickboxing class. What we are talking about is stretching, and stretching is great for you. Not only does stretching make you more limber for your next big kickboxing class, but it also helps keep you flexible in general.</p>

<p>Of course, warming up your muscles before you engage in any physical activity is important to avoid injuries such as a pulled muscle, but that is not really what we are getting at here. Building flexibility over time is great because it helps you avoid injuries in your everyday life.</p>

<p>Slipping and falling on an icy sidewalk can definitely be painful, but if you are inflexible it can be a whole lot worse because your body is automatically going to move to catch yourself when you fall, but if you aren’t flexible enough you could a pull a muscle when you do that.</p>

</p>Of course being more flexible is good for other things too, such as being a better fighter in kickboxing or even for being a better lover in bed too. There is also the fact that being more flexible also leads to having better balance.</p>
</div>
<div class='heading'>5. Kickboxing Is A Great Cardiovascular Exercise – Aerobic & Anaerobic </div>
<div class= 'content'>
<p>Yet another fantastic benefit that comes along with practicing kickboxing is that it is a great form of aerobic and anaerobic training, or in other words, it helps to make your heart and your lungs stronger. This benefit is true both for the act of kickboxing itself, such as when you punch a weighted bag, when you fight those wooden dummies, when you spar with a partner, and when you engage in a real kickboxing competition.</p>

</p>All of those things will definitely get your lungs heaving and your heart pumping like nothing else. This is also true for all of the training that comes along with kickboxing. Things such as jumping rope, doing circuit training, jogging, and sprinting all come along with kickboxing and they all serve to improve your cardiovascular health. Having a strong heart is indeed very important for many different reasons.
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
