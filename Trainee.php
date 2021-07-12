<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
  <title>FitPro Booking</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="Trainee.css">
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
<div class="text">
       "One Step Closer To The<br>
       Better You."
    </div>
<div style="position:absolute; left:42%; top:35%; margin-right:3%;">
<?php

	$conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
  $db = mysqli_select_db($conn, 'fitprousers') or die("databse error");

  $query = mysqli_query($conn, "SELECT * FROM booking_details");

  $numrows = mysqli_num_rows($query);

  if($numrows !=0)
{
  while($row = mysqli_fetch_assoc($query))
  {
    ?>
    <form method="post">
              <div class="item">
              <img src="dumbbell.jpg" style="border-radius:10px;height:235px;width:200px;">
              <div class="ad">
              <br>
               <form method="post" action="Trainee.php">

                <?php echo "<b>Trainer : </b>".$row['Trainer'];?><br>
                <?php echo "<b>Workout : </b>".$row['Workout'];?><br>
                <?php echo "<b>Location : </b>".$row['Location'];?><br>
                <?php echo "<b>Date : </b>".$row['Date'];?><br>
                <?php echo "<b>Time : </b>".$row['Time'];?><br>
                <?php echo "<b>Fee : </b>Rs ".$row['Price'];?><br>
                <?php echo "<b>Intensity : </b>".$row['Intensity'];?><br><br>
                <input type="hidden" name="id" value= "<?php echo $row['W_id']; ?>"/>
                <b><input type="submit" value="Add to My Duffel" name="workoutbutton"

                class="btnAddAction"
                style="background-color:white;
                border: none; width:160px; color:#005F40; padding:5px;"/></b>


            </div>
            <br>
          </div>
          <br>
  </form>
  <?php
  }

  if(isset($_POST['workoutbutton'])) {

    $query1 = mysqli_query($conn, "SELECT * FROM booking_details WHERE W_id = ".$_POST['id']."");

    $row1 = mysqli_fetch_assoc($query1);


   $sql2 =mysqli_query( $conn,"INSERT INTO duffel (W_id,Trainee,Trainer,Workout,Location,Date,Time,Price,Intensity) VALUES ('".$_POST['id']."','".$_SESSION['sess_user']."','".$row1['Trainer']."','".$row1['Workout']."','".$row1['Location']."','".$row1['Date']."','".$row1['Time']."','".$row1['Price']."','".$row1['Intensity']."')");
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
