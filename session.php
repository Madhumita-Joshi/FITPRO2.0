<?php



$user = $_POST['name'];
$pass = $_POST['pw'];



$conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
$db = mysqli_select_db($conn, 'fitprousers') or die("databse error");



$query = mysqli_query($conn, "SELECT * FROM user WHERE Name='".$user."' AND Password='".$pass."'");
$numrows = mysqli_num_rows($query);
if($numrows !=0)
{
while($row = mysqli_fetch_assoc($query))
{
$dbusername=$row['Name'];
$dbpassword=$row['Password'];
$dbmail=$row['E-mail'];
$dbgender=$row['Gender'];
$dbrole=$row['Role'];
$dbcity=$row['City'];
$dbage=$row['Age'];
}
if($user == $dbusername && $pass == $dbpassword)
{
session_start();
$_SESSION['sess_user']=$dbusername;
$_SESSION['sess_mail']=$dbmail;
$_SESSION['sess_gender']=$dbgender;
$_SESSION['sess_role']=$dbrole;
$_SESSION['sess_city']=$dbcity;
$_SESSION['sess_age']=$dbage;
header("Location:Homepage2.php");
}
}
else
{
echo "Invalid Username or Password!";
}
?>
