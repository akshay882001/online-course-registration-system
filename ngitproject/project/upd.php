<!doctype.html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<?php
session_start();
include("headerin.php");
include("db_connect.php");
 ?>
 <?php
echo"
<form method=\"post\" action=\"upddb.php\" enctype=\"multipart/form-data\" name=\"reg\" >
  <div class=\"container\" align=\"center\" >
  <fieldset>
    <h1>Your Details</h1>
    <p>Please edit your details.</p>
    <hr>
   <label for=\"fname\"><b>First name</b></label><br>
    <input type=\"text\" placeholder=\"Enter first name\" name=\"fname\" value=".$_SESSION["fn"]." required><br>
	
   <label for=\"lname\"><b>Last name</b></label><br>
    <input type=\"text\" placeholder=\"Enter last name\" name=\"lname\" value=".$_SESSION["ln"]." required>
	<br>

	<label for=\"father_name\"><b>father name</b></label><br>
    <input type=\"text\" placeholder=\"Enter father name\" name=\"father_name\" value=".$_SESSION["fan"] ." required>
	<br>
    

	<label for=\"age\"><b>age</b></label><br>
    <input type=\"number\" placeholder=\"Enter your age\" name=\"age\" maxlength=\"2\" value=".$_SESSION["age"]." required>
	<br>

	<label for=\"rollno\"><b>Roll Number</b></label><br>
    <input type=\"number\" placeholder=\"Enter Roll Number\" name=\"rollno\" maxlength=\"12\" value=".$_SESSION["roll"]." required>
	<br>
	<label for=\"address\"><b>Address</b></label><br>
	<div class=\"add\">
	<input type=\"text\" placeholder=\"Enter address\" name=\"address\" value=".$_SESSION["add"] ." required>
	<br>
	</div>
	
	<label> <b> Branch&Section </b></label><br>
    <div class=\"pin\" >
	    <select name=\"Section\">
    	    <option value=\"--Section--\" >".$_SESSION["branch"]."</option>
    	    <option class=\"lt\" value=\"CSE-A\">CSE-A</option>
        	<option class=\"lt\" value=\"CSE-B\">CSE-B</option>
	        <option class=\"lt\" value=\"CSE-C\">CSE-C</option>
        	<option class=\"lt\" value=\"IT-A\">IT-A</option>
            <option class=\"lt\" value=\"IT-B\">IT-B</option>
        </select>
    </div>

<label> <b> Year </b></label><br>
<div class=\"pin\" >
	<select name=\"Year\">
	<option value=\"--Year--\" >".$_SESSION["year"]."</option>
	<option class=\"lt\" value=\"1\">1</option>
	<option class=\"lt\" value=\"2\">2</option>
	<option class=\"lt\" value=\"3\">3</option>
	<option class=\"lt\" value=\"4\">4</option>
</select>
</div>

	
	<label for=\"contact\"><b>Your phone no:</b></label><br>
    <input type=\"number\" min=\"10\" placeholder=\"Enter your phone no:\" class=\"phno\" name=\"phn\" value=".$_SESSION["phone"]." required><br>

    <button type=\"submit\"  name=\"submit\" class=\"registerbtn\">Update</button>
</fieldset>
  
  </div>
  </form>
<script type=\"text/javascript\">
";?>
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
function confirm()
{
	sectioncheck();
	yearcheck();
	check();
	
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
