<?php
include("db_connect.php");
session_start();
if($_SESSION["into"]!=null)
{
	
	
	$query2 = "select count from scc where email='".$_SESSION["semail"]."';" ;
$result2 = mysqli_query($con,$query2);
if(!($result2)){echo mysqli_error($con);}
$num_rows2 = mysqli_num_rows($result2);

if($num_rows2 >0)
{   
$row2 = mysqli_fetch_assoc($result2);

$_SESSION["counted"]=$row2["count"];
if($row2["count"]==8)
{
	echo "<script>alert('You cannot enrol in more than 8 courses!');window.location.replace('/ngitproject/project/dash.php');</script>";
}	

else
{
					



$query2 = "select fee from courses where course_id='".$_SESSION["into"]."';" ;
$result2 = mysqli_query($con,$query2);
if(!($result2)){echo mysqli_error($con);}
$num_rows2 = mysqli_num_rows($result2);

if($num_rows2 >0)
{   
$row2 = mysqli_fetch_assoc($result2);
$_SESSION["ssfee"]=$row2["fee"];
}


echo "<script>window.location.replace('/ngitproject/project/makepay.php')</script>";

}
	
}

}

?>