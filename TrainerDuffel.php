<?php
if(!isset($_SESSION["sess_user"])){
session_start();
}
?>
<html>

<head>
<title>My Duffel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="Duffel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
 crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <div class="nav">
		<i class="material-icons" style="position:absolute; left:71%;top: 5%;">search</i>
        <img src="FitPrologo.png" width="250px" height="50%">
        <span style="position:absolute; left:73%;top: 5%;border-left:6px solid white;"><button onclick="window.location.href='Homepage2.php';">Home</button></span>
        <span style="position:absolute; left:85%;top: 5%;"><button><?=$_SESSION['sess_user'];?><button></span>

       </div>
	   <div>
        <button class = "button2" onclick="window.location.href='Workouts.php';"style="position:absolute; left:0%;top:13%;" >WORKOUTS</button>
        <button class = "button2" onclick="window.location.href='Profile.php';"style="position:absolute; left:25%;top:13%;" >PROFILE</button>
        <button class = "button2" onclick="window.location.href='Nutrition.php';"; style="position:absolute; left:50%;top:13%;">BLOGS</button>
        <button class = "button2" onclick="window.location.href='Duffel.php';"style="position:absolute; left:75%;top:13%;">MY DUFFEL</button>
</div>
<div class="text" >
"The body achieves what<br>  the mind believes"
    </div>
<div style="position:absolute; left:42%; top:35%; margin-right:3%;">

<?php
$conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
$db = mysqli_select_db($conn, 'fitprousers') or die("databse error");
$query = mysqli_query($conn, "SELECT * FROM duffel WHERE Trainer = '".$_SESSION["sess_user"]."'");
$numrows = mysqli_num_rows($query);

if($numrows !=0){
while($row = mysqli_fetch_assoc($query))
{
  ?>
  <form method="post">
            <div class="item">
            <img src="dumbbell2.jpg" style="border-radius:10px;height:235px;width:200px;object-fit: cover;">
            <div class="ad">
            <br>
             <form method="post" action="TrainerDuffel.php">
              <?php echo "<b>Trainee : </b>".$row['Trainee'];?><br>
              <?php echo "<b>Workout : </b>".$row['Workout'];?><br>
              <?php echo "<b>Location : </b>".$row['Location'];?><br>
              <?php echo "<b>Date : </b>".$row['Date'];?><br>
              <?php echo "<b>Time : </b>".$row['Time'];?><br>
              <?php echo "<b>Fee : </b>Rs ".$row['Price'];?><br>
              <?php echo "<b>Intensity : </b>".$row['Intensity'];?>

          </div>
          <br>
        </div>
        <br>
  </form>
<?php
}
}
else{
  ?>
  <div style="position:absolute; top:175px; left:290px; background-color: #005F40;color:white;width:300px; font-size:30px;"><center>
Your Duffel is empty :( </center></div>
<?php
}
?>
</body>
</html>
