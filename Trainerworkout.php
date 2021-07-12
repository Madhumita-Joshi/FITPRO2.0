<?php
if(!isset($_SESSION["sess_user"])){
session_start();
}

$Trainer = $_SESSION['sess_user'];
$Workout = $_POST['Workout'];
$Location = $_POST["Location"];
$Date = $_POST["Date"];
$Time = $_POST["Time"];
$Price = $_POST["Price"];
$Intensity = $_POST["Intensity"];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitprousers";



$conn = mysqli_connect($servername,$username,$password,$dbname);




$sql1 = "CREATE TABLE IF NOT EXISTS booking_details (

Trainer VARCHAR(255) NOT NULL,
Workout VARCHAR(255) NOT NULL,
Location VARCHAR(255) NOT NULL,
Date_ DATE NOT NULL,
Time_ TIME NOT NULL,
Price VARCHAR(255) NOT NULL,
Intensity VARCHAR(255) NOT NULL)";


$sql2 = "INSERT INTO booking_details VALUES ('','$Trainer','$Workout','$Location','$Date','$Time','$Price','$Intensity')";



$result = mysqli_query($conn, $sql2);
header("Location:Trainer.php");
?>
