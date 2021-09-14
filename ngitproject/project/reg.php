<!doctype.html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<?php
//session_start();
include("header.php");
include("db_connect.php");
 ?>
<form method="post" action="registerval.php" enctype="multipart/form-data" name="reg" >
  <div class="container" align="center" >
  <fieldset>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
   <label for="fname"><b>First name</b></label><br>
    <input type="text" placeholder="Enter first name" name="fname" required><br>
	
   <label for="lname"><b>Last name</b></label><br>
    <input type="text" placeholder="Enter last name" name="lname" required>
	<br>

	<label for="father_name"><b>father name</b></label><br>
    <input type="text" placeholder="Enter father name" name="father_name" required>
	<br>
    
	<label for="dob"><b>Date of Birth</b></label><br>
    <input type="date" placeholder="Enter your date of birth" name="dob" required>
	<br>

	<label for="age"><b>age</b></label><br>
    <input type="number" placeholder="Enter your age" name="age" maxlength="2" onfocusout="agecheck()" required>
	<br>

	<label for="rollno"><b>Roll Number</b></label><br>
    <input type="number" placeholder="Enter Roll Number" name="rollno" maxlength="12" required>
	<br>
	<label for="address"><b>Address</b></label><br>
	<div class="add">
	<input type="text" placeholder="Enter address" name="address" required>
	<br>
	</div>
	
	<label> <b> Branch&Section </b></label><br>
    <div class="pin" >
	    <select name="Section">
    	    <option value="--Section--" >--Section--</option>
    	    <option class="lt" value="CSE-A">CSE-A</option>
        	<option class="lt" value="CSE-B">CSE-B</option>
	        <option class="lt" value="CSE-C">CSE-C</option>
        	<option class="lt" value="IT-A">IT-A</option>
            <option class="lt" value="IT-B">IT-B</option>
        </select>
    </div>

<label> <b> Year </b></label><br>
<div class="pin" >
	<select name="Year">
	<option value="--Year--" >--Year--</option>
	<option class="lt" value="1">1</option>
	<option class="lt" value="2">2</option>
	<option class="lt" value="3">3</option>
	<option class="lt" value="4">4</option>
</select>
</div>


	<h3>Gender</h3>
	<input type="radio"  name="gender" value="m" required>
	<label for="male"><b>male</b></label>
    
	<input type="radio" name="gender" value="f" required>
	<label for="female"><b>female</b></label>
    <input type="radio" name="gender" value="other" required>
<label for="other"><b>other</b></label>
    
	
	<br><br>
    <label for="email"><b>Email</b></label><br>
    <input type="email" placeholder="Enter Email" onfocus="course()" name="email" required><br>
	
	
	<label><b> Passport photo:</b></label>
	<input type="file" name="pass_photo" required /> <br><br>
	
	
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" minlength="8" id="ps" name="psw" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" onfocusout="check()" id="psr" name="psrw" required><br>
	
	
	<label for="contact"><b>Your phone no:</b></label><br>
    <input type="number" min="10" placeholder="Enter your phone no:" class="phno" name="phn" required><br>

	<label><b> id proof(id card photo):</b></label>
	<input type="file" name="memo" accept="image/*" required /> 
    
	<p>By creating an account you agree to our <a href="#" >Terms & Privacy</a>.</p>

    <button type="submit"  name="submit" class="registerbtn">Register</button>
</fieldset>
  
  <div style="font-style:timesnewroman;">
    <p>Already have an account? <a href="/ngitproject/project/home.php">Sign in</a>.</p>
  </div>
  </div>
  </form>
<script type="text/javascript">

function check()
{
var psr = document.reg.psw.value;
var psrw = document.reg.psrw.value;

if(psr != psrw)
{
alert("Re-entered password not matched");		
}
}
function sectioncheck()
{
	var c = document.reg.Section.value;
	if(c == "--Section--")
	{
		alert("error at section");
	}
	
}
function yearcheck()
{
	var c = document.reg.Year.value;
	if(c == "--Year--")
	{
		alert("error at year");
	}
	
}
function agecheck()
{
	var c = document.reg.age.value;
	console.log(c);
	if(16 > c || c > 99)
	{
		document.reg.age.value='';
		alert("error at age");
	}
}
function confirm()
{
	sectioncheck();
	yearcheck();
	check();
	agecheck();
	
}
</script>
<div>
<?php
include("footer.php");
// session_start();
  ?>
</div>

</body>
</html>
