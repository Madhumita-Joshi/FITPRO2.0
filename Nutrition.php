
<?php
session_start();
?>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Health and Diet</title>
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
      width: 342px;
      height: 54px;
      display: inline-block;
      border: none;
      box-shadow: 8 0px 0px 0 rgba(0, 0, 0, .6);
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

    .form{
      background-color: white;
      width:10%;
    }

    body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)),url('nutrition2.jpg');  height: 200%;
  background-position: center;
  background-repeat: repeat;
  background-size: cover;
}


.bg-text {
  background-color:white;
  opacity:80%;
  color: #005F40;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 120%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 50px;
  text-align: left;
  font-family: 'Nexa Regular', helvetica, arial, sans-serif;
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
      <button class = "button2" onclick="window.location.href='Profile.php';"style="position:absolute; left:25%;top:13%;">PROFILE</button>
      <button class = "button2" onclick="window.location.href='Nutrition.php';" style="position:absolute; left:50%;top:13%;">BLOGS</button>
      <button class = "button2" onclick="window.location.href='Duffel.php';"style="position:absolute; left:75%;top:13%;">MY DUFFEL</button>
</div>
<br><br>
<div class="bg-image"></div>
<div class="bg-text" >
<center><h1><b>Health and Diet</b></h1>
<br>
<!--<img src="water.jpg" style="width:200px;height:200px;">-->
<br>
<p>A healthy diet has been scientifically proven to provide numerous health benefits, such as reducing your risk of several chronic diseases and keeping your body healthy.
However, making major changes to your diet can sometimes seem very overwhelming.Instead of making big changes, it may be better to start with a few smaller ones.</center>
<br>

<b>1. Choose Whole-Grain Bread — Not Refined</b>
<br><br>
You can easily make your diet a bit healthier by choosing whole grain bread in place of traditional refined-grain bread.

As opposed to refined grains, which have been linked to many health issues, whole grains have been linked to a variety of health benefits, including a reduced risk of type 2 diabetes, heart disease and cancer.

They are also a good source of fiber, B vitamins and several minerals, such as zinc, iron, magnesium and manganese.

There are many varieties of whole-grain bread available, and many of them even taste better than refined bread.

Just make sure to read the label to ensure that your bread is made with whole grains only, not a mixture of whole and refined grains. It’s also preferable that the bread contains whole seeds or grains.
<br><br>
<b>2. Drink Enough Water</b><br><br>
Drinking enough water is important for your health.

Many studies have shown that drinking water may benefit weight loss, weight maintenance and even slightly increase the number of calories you burn daily.

Studies also show that drinking water before meals can reduce appetite and calorie intake during the subsequent meal in middle-aged and older adults .

That said, the most important thing is to drink water instead of other beverages. This may drastically reduce your sugar and calorie intake .

People who drink mostly water have been shown to consume 200 fewer calories per day, on average, than those who drink other beverages.
<br><br>

<b>3. Add Greek Yogurt to Your Diet</b>
<br><br>
Greek yogurt (or Greek-style yogurt) is thicker and creamier than regular yogurt.

It has been strained to remove its excess whey, which is the watery part of milk. The end result is a yogurt that is higher in fat and protein than regular yogurt.

In fact, it contains up to three times the amount of protein found in the same amount of regular yogurt, or up to 9 grams per 100 grams.

Eating a good source of protein helps you feel fuller for longer, helping you manage your appetite and eat fewer calories overall .

Furthermore, since Greek yogurt has been strained, it contains fewer carbs and lactose than regular yogurt, making it suitable for those who follow a low-carb diet or are lactose intolerant.

Simply replace some snacks or regular yogurt varieties with Greek yogurt for a hefty dose of protein and nutrients.

Just make sure to pick the non-flavored varieties, as flavored ones may be packed with added sugar and other unhealthy ingredients.

</p>
</p>
</div>
</div>
<center>
<div class='footer'>
<br><br>
  <p> Copyright © 2021 FitPro. All rights reserved | Terms and Conditions | Privacy Policy </p>
</div>
</center>
</body>
<html>
