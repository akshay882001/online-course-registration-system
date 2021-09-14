<?php
include("db_connect.php");
session_start();
//Capturing post requests
$fname = htmlentities((mysqli_real_escape_string($con, $_POST["fname"])));
$lname = htmlentities((mysqli_real_escape_string($con,  $_POST["lname"])));
$father_name = htmlentities((mysqli_real_escape_string($con,  $_POST["father_name"])));

$address = htmlentities((mysqli_real_escape_string($con,  $_POST["address"])));
$age = htmlentities((mysqli_real_escape_string($con,  $_POST["age"])));
$phn =  htmlentities((mysqli_real_escape_string($con, $_POST["phn"])));
$roll =  htmlentities((mysqli_real_escape_string($con, $_POST["rollno"])));
$section = htmlentities((mysqli_real_escape_string($con,  $_POST["Section"])));
$year =  htmlentities((mysqli_real_escape_string($con, $_POST["Year"])));

//database entry
$query = "update users set user_fname= '".$fname."', user_lname= '".$lname."',father_name= '".$father_name."',address= '".$address."',age= '".$age."',pin_year= '".$year."',pin_branch= '".$section."',pin_num= '".$roll."',user_phone= '".$phn."' where user_email='".$_SESSION["semail"]."'";
if(!(mysqli_query($con,$query)))
{
	$err = mysqli_error($con);
	echo $err;
	//echo strcmp($err,'Duplicate entry');
	if(strcmp($err,'Duplicate entry'))
	{
		echo "<script>alert('Error!');window.location.replace('/ngitproject/project/upd.php.php');</script>";
		
	}
	else
	{
		echo mysqli_error($con);
		
	}
		
}
else{
	$u_name = $fname." ".$lname;
	//mailTo(html_entity_decode($email),'new_user',$u_name);
	echo "<script>alert('Updated Successfully');window.location.replace('/ngitproject/project/upd.php');</script>";
}






?>