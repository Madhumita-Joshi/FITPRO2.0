<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>TRX</title>
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
        <button class = "button2" onclick="window.location.href='Profile.php.php';"style="position:absolute; left:25%;top:13%;" >PROFILE</button>
        <button class = "button2" onclick="window.location.href='Nutrition.HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1.php';"style="position:absolute; left:50%;top:13%;">BLOGS</button>
        <button class = "button2" onclick="window.location.href='Duffel.php';"style="position:absolute; left:75%;top:13%;">MY DUFFEL</button>     
</div>
   <div class="img">
   <center><img src="trxpage.png" width=80%;height=550px;></center>
   <br>
   <center><div class ='title'> <strong> TRX </strong></div> </center>
<div class= 'content'>
<p>If you haven’t swung from the rafters with TRX suspension training before, the chances are you have already seen or read about it. Invented by a Navy Seal to keep his fellow troops fit in remote parts of the world, it involves the use of hanging bands to engage muscles using just your own body weight. By changing the way you angle your body, every muscle can be engaged in a pull or push motion.
</p>
<p>This fantastic and simple method of exercise can allow anyone to reach their desired goal, be it weight loss, improved muscle tone or overall fitness. Here, we outline 7 benefits of TRX suspension training, from its low impact nature to engaging your whole body.
</p>
</div>
<div class='heading'>1. Suitable for all levels </div>
<div class= 'content'>
<p>It doesn’t matter if you’re an Olympic athlete or just venturing into a new hobby of fitness; TRX suspension training is beneficial for all levels of athlete. Just by changing your body position slightly, the load can be increased or decreased on your muscles meaning that everyone can use this method of training.
</p>
</div>
<div class='heading'>2. Versatility </div>
<div class= 'content'>
<p>Just two adjustable bands provide a comprehensive workout to every single muscle in your body. You can transport them easily and set up the TRX suspension system anywhere, so when you come back from your healthy holiday, totally addicted, you can buy your own and carry on enjoying the benefits wherever you are.
</p>
</div>
<div class='heading'>3. Improve cardio and strength </div>
<div class= 'content'>
<p>TRX suspension workouts will not only improve your muscle strength, but also your cardiovascular endurance. By changing the speed at which you perform the exercise, you can increase the work out you give to your heart and lungs.
</p>
</div>
<div class='heading'>4. Help achieve any goal </div>
<div class= 'content'>
<p>Because of the versatility of the TRX suspension training, any goal can be achieved. You may wish to gain muscle strength, lose weight or even train for a marathon. Whatever your aim, regular TRX suspension training will get you there.
</p>
</div>
<div class='heading'>5. Engages whole body </div>
<div class= 'content'>
<p>The instability that the TRX suspension system creates whilst you perform movements means that your core is constantly activated. Moreover, the functional movements mean that many muscles are worked at the same time, providing a very comprehensive, all over workout.
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
