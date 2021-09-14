<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<title>Profile</title>
</head>
<?php
 session_start();
 include("headerin.php");	
 include("db_connect.php");
?>
<body bgcolor="black">
<form method="post" action="upd.php">
<fieldset>
<?php

include("db_connect.php");
if(isset($_REQUEST["logout"]))
{
	session_destroy();
	echo "<script> window.location.replace(\" /ngitproject/project/home.php \") </script> ";
	
}
$user_id = $_SESSION["id"];
$query2 = "select * from users where user_id=".$user_id.";" ;
$result2 = mysqli_query($con,$query2);
if(!($result2)){echo mysqli_error($con);}
$num_rows2 = mysqli_num_rows($result2);



//---------------


//---------------

if($num_rows2 >0)
{   
$row2 = mysqli_fetch_assoc($result2);
echo "Details:<br><br>";
echo "First Name:".$row2["user_fname"]."  <br>";
echo "Last Name:".$row2["user_lname"]."  <br>";
echo "Father Name:".$row2["father_name"]."  <br>";
echo "Year of Birth:".$row2["dob"]."  <br>";
echo "Age:".$row2["age"]."  <br>";
echo "Address:".$row2["address"]."  <br>";
echo "Course Year:".$row2["pin_year"]."  <br>";
echo "Branch:".$row2["pin_branch"]."  <br>";
echo "Roll Number:".$row2["pin_num"]."  <br>";
echo "Email:".$row2["user_email"]."  <br>";
echo "Password:".$row2["password"]."  <br>";
echo "Gender:".$row2["user_gender"]."  <br>";
echo "Phone:".$row2["user_phone"]."  <br>";

$_SESSION["fn"]=$row2["user_fname"];
$_SESSION["ln"]=$row2["user_lname"];
$_SESSION["fan"]=$row2["father_name"];
$_SESSION["year"]=$row2["pin_year"];
$_SESSION["branch"]=$row2["pin_branch"];
$_SESSION["roll"]=$row2["pin_num"];
$_SESSION["phone"]=$row2["user_phone"];
$_SESSION["bod"]=$row2["dob"];
$_SESSION["add"]=$row2["address"];
$_SESSION["age"]=$row2["age"];


echo"<div class=\"container\">
  Passport photo:<br><p><img src='".$row2["avatar"]."'  class=\"image\" style=\"width:20%\" height='10%'></p><br>
  ID Proof (College ID):<br><p><img src='".$row2["memo"]."'  class=\"image\" style=\"width:20%\" height='10%'></p>
</div>
";

}

echo "
	<center><button type=\"submit\" class=\"button\" style=\"align:middle\" ><span>Edit your profile</span></button></center>
	";

?>
<?php
include("footer.php");
// session_start();
  ?>

</fieldset>
</form>
</body>
</html>