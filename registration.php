<!DOCTYPE html>
<html>
  <head>
    <title>Fitpro registration</title>
    <link rel="stylesheet" href="mystyle.css">
    <style>

      body
      {
      background-image: url("register.jpg");
      background-repeat:no-repeat;
      background-size: cover;
      background-position: center;
      opacity:95%;
      }

    .form {
      position: relative;
      left:27%;

      background-color:white;
      color:#005F40;
      border-style:solid;
      border-color:white;
      padding-bottom: 6%;
      margin-top: 1%;
      margin-left: 32%;
      margin-right: 32%;
      border-radius: 25px;
      font-family:robot;
      }

      .text {
      position:absolute;
      left:10%;
      font-size:55px;
      top:45%;
      color:white;
      font-family:roboto;
      background-color:#005F40;
      padding:2%;
      padding-left:3%;
      padding-right:3%;
      }


    </style>

     <script>
      function validate()
       {
        var name=document.myform.name.value
        var email=document.myform.em.value
        var password=document.myform.pw.value
		    var rpassword = document.myform.r_pass.value

        if(name == "")
        {
          alert('Name can not be blank.')
          return false;
        }

        if(email == "")
        {
          alert('Email can not be blank.')
          return false;
        }
		    if (email.indexOf('@') == -1) {
				alert('Email can not invalid.')
        valid = false;
    } else {

        var parts = email.split('@');
        var domain = parts[1];

        if (domain.indexOf('.') == -1) {
            alert('Email can not invalid.')
            valid = false;

        } else {

            var domainParts = domain.split('.');
            var ext = domainParts[1];

            if (ext.length > 4 || ext.length < 2) {
                  alert('Email can not invalid.')
                valid = false;
            }
        }
	}
        if(password == "")
        {
          alert('Password can not be blank.')
          return false;
        }

        if(password.length<6)
        {
          alert('Password must be atleast 6 characters long.')
          return false;
        }
    if (rpassword.value == "") {
        window.alert("Please retype your password");
        rpassword.focus();
        return false;
    }
	if ((password.value) != (rpassword.value)) {
        window.alert("Your password does not match");
        rpassword.focus();
        return false;
    }
        if((document.myform.role[0].checked==false) && (document.myform.role[1].checked==false) )
        {
          alert('Please select your role.')
          return false;
        }

        if((document.myform.gender[0].checked==false) && (document.myform.gender[1].checked==false) && (document.myform.gender[2].checked==false))
        {
          alert('Please select your gender.')
          return false;
        }


         if((document.myform.city.value =="0"))
         {
          alert('Please select your city.')
          return false;
         }

         if((document.myform.age.value =="0"))
         {
          alert('Please select your age group.')
          return false;
         }

         return true;
        }
     </script>
  </head>
  <body align="center">

   <div1 class="text">
       "Your fitness journey <br>
       begins today."
    </div1>

    <div class="form">
    <br><br><br>
    <font size="15">Please fill in the details.</font><br><br>

    <form  name="myform" method="POST" action="insertion.php" onsubmit="return validate();" >
	  <font size="5" >
		Name: &nbsp <input type="text" name="name" placeholder="Name"><br><br>
    E-mail:&nbsp <input type="text"name="em" placeholder="E-mail id"><br><br>
		Password:&nbsp <input type="password" name="pw" placeholder="Minimum 6 characters"><br><br>
		Re-enter Password :&nbsp <input type="password" name="r_pass" placeholder="Enter your Password again"><br><br>

		Role:&nbsp;&nbsp;
    <input type="radio" name="role" value="Trainer">Trainer
		<input type="radio" name="role" value="Trainee">Trainee<br><br>

    Gender:
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Other">Other
    <br><br>

		City: <select name="city">
        <option value=0></option>
				<option value="Mumbai">Mumbai</option>
				<option value="Delhi">Delhi</option>
				<option disabled value="Bangalore" >Banglore</option>
				<option value="Kolkata">Kolkata</option>
		</select>
		<br><br>

		Age: <select name="age" >
        <option value=0></option>
				<option value="15-20">15-20 </option>
				<option value="20-30">20-35 </option>
				<option value="35-55">35-55 </option>
				<option value="55"> >55  </option>
		</select><br><br>

		<font size="3">
		I would like to receive promotional emails.
		<input type="checkbox"  name="checkbox" >
		</font>
		<br><br>

		<input class="button" type="Submit" value="Submit" >
		<input class="button" type="reset" >

		</div>
  	</font>
</form>
</body>
</html>
