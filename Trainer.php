<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>FitPro Booking</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="Trainer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script>
function bookingval()
{
if((document.bookingform.Workout.value =="0"))
{
alert('Please select Type of Workout.')
return false;
}
if(document.bookingform.Location.value == "")
{
alert('Location can not be blank.')
return false;
}
if((document.bookingform.Date.value == ""))
{
alert('Please select Date for your Booking.')
return false;
}
if((document.bookingform.Time.value == ""))
{
alert('Please select Time for your booking.')
return false;
}
if((document.bookingform.Price.value =="0"))
{
alert('Please select your Price.')
return false;
}
if((document.bookingform.Intensity[0].checked==false) && (document.bookingform.Intensity[1].checked==false))
{
alert('Please select Intensity of Workout.')
return false;
}
}
</script>
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
<div class="form" style="color:white;" >
<center>
<font size="6" >Tell us more about your Workout!</font><br><br>
<form name="bookingform" method="POST" action="Trainerworkout.php" onsubmit="return bookingval();" >
<font size="4">
Workout : <select name="Workout" style="color:#005F40;">
<option value=0></option>
<option value="Yoga" style="color:#005F40;">Yoga</option>
<option value="Kickboxing" style="color:#005F40;">Kickboxing</option>
<option value="TRX" style="color:#005F40;">TRX</option>
<option value="HIIT" style="color:#005F40;">HIIT</option>

</select><br><br>



Location :&nbsp <input type="text" name="Location" Placeholder="Enter location" style="color:#005F40;"><br><br>



Date :&nbsp <input type="date" name="Date" style="color:#005F40;"><br><br>



Time :&nbsp <input type="time" name="Time" style="color:#005F40;"><br><br>



Price :&nbsp <input type="text" name="Price" Placeholder="Enter Price" style="color:#005F40;"><br><br>



Intensity :&nbsp <input type="radio" name="Intensity" value="Beginners" style="color:#005F40;"> Beginners &nbsp
<input type="radio" name="Intensity" value="Advanced" style="color:#005F40;"> Advanced<br><br>



<center><b><input class="button1" style="color:#005F40; background-color:white;width:50%;" type="submit" value="Confirm Session  " ></b></center>
</font>
</form>
</center>
</div>
<div style="position:absolute; left:37%; top:35%; margin-right:3%;">
<?php
$conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
$db = mysqli_select_db($conn, 'fitprousers') or die("databse error");



$query = mysqli_query($conn, "SELECT * FROM booking_details");



$numrows = mysqli_num_rows($query);
if($numrows !=0)
{
while($row = mysqli_fetch_assoc($query))
{
{
?>



<form method="post" action=" ">
<div class="item">
<img src="dumbbell.jpg" style="border-radius:10px;height:220px;width:200px;">



<div class="ad">
<br>
<?php echo "<b>Trainer : </b>". $row['Trainer'];?><br>
<?php echo "<b>Workout : </b>".$row['Workout'];?><br>
<?php echo "<b>Location : </b>".$row['Location'];?><br>
<?php echo "<b>Date : </b>".$row['Date'];?><br>
<?php echo "<b>Time : </b>".$row['Time'];?><br>
<?php echo "<b>Fee :</b> Rs ".$row['Price'];?><br>
<?php echo "<b>Intensity : </b>".$row['Intensity'];?><br>

<!--<input type="submit" value="Add to My Duffel" class="btnAddAction" style="background-color:#005F40;
border: none; width:160px; color:white; padding:5px;text-align: center;"/>-->
</div>
</div>
</form>
<?php
}
echo "<br>";
echo "<br>";



}
}
else
{
?>
<div style="position:absolute; top:175px; left:290px; background-color: #005F40;color:white;width:300px; font-size:30px;"><center>
Sorry, No Workouts Available :(</center></div>
<?php
}



?>
</div>
<center>
<div class='footer'>
<br><br>
<p> Copyright © 2021 FitPro. All rights reserved | Terms and Conditions | Privacy Policy </p>
</div>
</center>
</body>
</html>
