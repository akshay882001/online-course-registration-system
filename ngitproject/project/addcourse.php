<?php
include("db_connect.php");
//Capturing post requests
$cid = htmlentities((mysqli_real_escape_string($con, $_POST["cid"])));
$cn = htmlentities((mysqli_real_escape_string($con,  $_POST["cn"])));
$cd =  htmlentities((mysqli_real_escape_string($con, $_POST["cd"])));


$target_dir = "media/intros/";	
$filename = strtolower(basename($_FILES["Iv"]["name"]));
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$target_file = $target_dir . uniqid().".".$imageFileType;
$uploadOk = 1;
// Check if image file is a actual image or fake image

    if (move_uploaded_file($_FILES["Iv"]["tmp_name"], $target_file)) {
        echo "The file ". $target_file. " has been uploaded.";	
		$avatar = $target_file;
	} else {
        echo "Sorry, there was an error uploading your file.";
    }

#-----------------------------

//database entry


$sql = "CREATE TABLE ".$cid."_i (
        course_id VARCHAR(50)  NOT NULL, 
        instructor_id VARCHAR(50) PRIMARY KEY
        );";

if (mysqli_query($con, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

$sql = "CREATE TABLE ".$cid."_s (
        course_id VARCHAR(50)  NOT NULL, 
        student_email VARCHAR(50) PRIMARY KEY
        );";

if (mysqli_query($con, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}


$query = "insert into courses(course_id,course_name,cdesc,cintro) values('".$cid."','".$cn."','".$cd."','".$avatar."')";
if(!(mysqli_query($con,$query)))
{
	$err = mysqli_error($con);
	echo $err;
	//echo strcmp($err,'Duplicate entry');
	if(strcmp($err,'Duplicate entry'))
	{
		echo "<script>alert('Course didn't get added, there was an error.');window.location.replace('/ngitproject/project/addc.php');</script>";
		
	}
	else
	{
		echo mysqli_error($con);
		
	}
		
}


echo "<script>alert('Done course added!.');window.location.replace('/ngitproject/project/addc.php');</script>";
		

?>