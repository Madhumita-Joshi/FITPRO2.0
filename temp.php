
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
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .2);

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

  </style>
</head>

<body style="background-color: #efeef1">
<nav class="nav">
	    <i class="material-icons" style="position:absolute; left:77%;top: 5%;">search</i>
      <img src="FitPrologo.png" width="250px" height="50%">
      <span style="position:absolute; left:80%;top: 4%;border-left:6px solid white;">
      <!--<span style="position:absolute; left:73%;top: 5%;border-left:6px solid white;"><button onclick="window.location.href='Homepage2.php';">Home</button></span>
      <span style="position:absolute; left:85%;top: 5%;"><button><?=$_SESSION['sess_user'];?><button></span>-->
</nav>

<div>
      <button class = "button2" onclick="window.location.href='Workouts.php';"style="position:absolute; left:0%;top:13%;" >WORKOUTS</button>
      <button   class = "button2" style="position:absolute; left:25%;top:13%;" >PROFILE</button>
      <button   class = "button2" onclick="window.location.href='Nutrition.php';" style="position:absolute; left:50%;top:13%;">BLOGS</button>
      <button   class = "button2" style="position:absolute; left:75%;top:13%;">MY DUFFEL</button>
</div>
<!-- <center><div class ='title'> <strong> Health and Diet </strong></div> </center> -->
</div>
<form class="form">

</form>
</div>
</body>
<html>
