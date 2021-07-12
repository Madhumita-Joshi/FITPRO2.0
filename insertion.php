<?php



$name = $_POST["name"];
$email = $_POST["em"];
$pw = $_POST["pw"];
$gender = $_POST["gender"];
$role = $_POST["role"];
$city = $_POST["city"];
$age = $_POST["age"];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitprousers";



$conn = mysqli_connect($servername,$username,$password,$dbname);



$query1 = mysqli_query($conn, "SELECT * FROM user WHERE name='".$name."'");
$numrows = mysqli_num_rows($query1);
if($numrows == 0 )
{
$sql = "INSERT INTO USER VALUES ('','$name','$email','$pw','$role','$gender','$city','$age')";
$result = mysqli_query($conn, $sql);
session_start();
$_SESSION['sess_user']=$name;
$_SESSION['sess_mail']=$email;
$_SESSION['sess_role']=$role;
$_SESSION['sess_gender']=$gender;
$_SESSION['sess_city']=$city;
$_SESSION['sess_age']=$age;
header("Location:Homepage2.php");
}
else {
{
echo("Username already exists.");
}
}





?>
