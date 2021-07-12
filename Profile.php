<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



<title>FitPro- Taller Sharper Stronger</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>User Profile</title>
<link rel="stylesheet" href="mystyle.css">
<style>



body
{
background-image: url("Profile1.jpg");
background-repeat:no-repeat;
background-size: 2100px;
background-position: center;
opacity:95%;
}
.avatar {
vertical-align: middle;
width: 100px;
height: 100px;
border-radius: 50%;
}
.prof {
position: relative;
left:375px;
top:120px;
background-color:white;
color:#005F40;
border-style:solid;
border-color:white;
padding-bottom: 6%;
margin-top: 1%;
margin-left: 34%;
margin-right: 34%;
border-radius: 25px;
font-family:robot;
}



.text {
position:absolute;
left:5%;
font-size:50px;
top:75%;
color:white;
font-family:roboto;
background-color:#005F40;
padding:2%;
padding-left:3%;
padding-right:3%;
}
.nav {
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
.button-logout{
background-color: #005F40; /* Green */
border: none;
color: white;
padding: 16px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
transition-duration: 0.4s;
cursor: pointer;
}



.logoutbutton1 {
background-color: white;
color: black;
border: 2px solid #005F40;
}



.logoutbutton1:hover {
background-color: #005F40;
color: white;
}



</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
</script>
</head>

</head>
<body align="center">
<div class="nav" style="background-color: white">
<i class="material-icons" style="position:absolute; left:71%;top: 5%;">search</i>
<img src="FitPrologo.png" width="250px" height="50%">
<span style="position:absolute; left:73%;top: 5%;border-left:6px solid white;"><button onclick="window.location.href='Homepage2.php';">Home</button></span>
<span style="position:absolute; left:85%;top: 5%;"><button><?=$_SESSION['sess_user'];?><button></span>
</div>
<div>
<div1 class="text">
"Don't wish for a good body <br>
work for it."
</div1>



<div>
<button class = "button2" onclick="window.location.href='Workouts.php';"style="position:absolute; left:0%;top:13%;" >WORKOUTS</button>
<button class = "button2" onclick="window.location.href='Profile.php';"style="position:absolute; left:25%;top:13%;" >PROFILE</button>
<button class = "button2" onclick="window.location.href='Nutrition.php';" style="position:absolute; left:50%;top:13%;">BLOGS</button>
<button class = "button2" onclick="window.location.href='Duffel.php';" style="position:absolute; left:75%;top:13%;">MY DUFFEL</button>
</div>
<div class="prof">
<br><br>
<font size="15">User Profile</font>
<br><br>
<img src="profavatar.jpg" alt="Avatar" class="avatar"><br><br><br>
<font size="4">
Name: <?=$_SESSION['sess_user'];?><br><br>
E-mail: <?=$_SESSION['sess_mail'];?><br><br>
Role: <?=$_SESSION['sess_role'];?><br><br>
Gender: <?=$_SESSION['sess_gender'];?><br><br>
City: <?=$_SESSION['sess_city'];?><br><br>
Age: <?=$_SESSION['sess_age'];?><br><br>
<button class="button-logout logoutbutton1"onclick="window.location.href='logout.php';">Logout</button>
</font>
</div>




<center>
<div style="position:absolute; top: 163%; width: 100%;height:100px; background-color:#005F40; color:white; font-size:14px;">
<br><br>
<p> Copyright © 2021 FitPro. All rights reserved | Terms and Conditions | Privacy Policy </p>
</div>
</center>
</body>
</html>
</body>
</html>
