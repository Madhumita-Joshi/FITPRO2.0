<!DOCTYPE html>
<html>
<head>
<title>login</title>
<style>
body {
background-image: url("login.jpg");
background-repeat:no-repeat;
background-size: cover;
background-position: center;
opacity:90%;
}



.a{
position :relative;
font-color:#005F40;
background-color:white;
border-style:solid;
border-color:white;
border-radius: 25px;
font-family:roboto;
padding-top:8%;
padding-bottom:8%;
margin-right:32%;
margin-top:5%;
margin-bottom:10%;
margin-left: 32%;
}



.button {
background-color:#005F40;
border: none;
width:120px;
color:white;
padding: 5px 5px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
border-radius: 5px;
}
.button:hover {
background-color: green;
color: white;
}
</style>
</head>



<body align="center" >

<div class="a">
<font size="15" >Login to get started!</font><br><br>
<form method="POST" action="session.php" >

<font size="5" >
Username: &nbsp; <input type="text" placeholder="Username" name = "name"><br><br>
Password: &nbsp; <input type="Password" placeholder="Password" name="pw"><br><br>
<input class="button" type="Submit" value="Log in" >
<input class="button" type="reset">
<br><br>
</form>
</font>
<font size = "4">
Not a member?
</font>
<br>
<br>
<button onclick="window.location.href='registration.php';"class='button';>
<span>Sign up</span>
</button>
<div>
</form>
</body>
</html>
