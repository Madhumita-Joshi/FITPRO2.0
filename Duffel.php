<?php
session_start();
//echo ($_SESSION['sess_role']);
if(!isset($_SESSION['sess_user']))
{
	header("Location: login page.php");
}
else
{
if($_SESSION['sess_role'] == 'Trainee'){
	header("Location:TraineeDuffel.php");
}
else {
	header("Location:TrainerDuffel.php");
}
}
?>
