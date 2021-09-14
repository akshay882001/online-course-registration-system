<?php
include("db_connect.php");
//Capturing post requests
$fname = htmlentities((mysqli_real_escape_string($con, $_POST["fname"])));
$lname = htmlentities((mysqli_real_escape_string($con,  $_POST["lname"])));
$email =  htmlentities((mysqli_real_escape_string($con, $_POST["email"])));
$gender = htmlentities((mysqli_real_escape_string($con,  $_POST["gender"])));
$father_name = htmlentities((mysqli_real_escape_string($con,  $_POST["father_name"])));
$dob = htmlentities((mysqli_real_escape_string($con,  $_POST["dob"])));
//$p_h = $_POST["psw"];
//$pass = hash('md5',$p_h);
$pass=$_POST["psw"];
echo $pass;
$address = htmlentities((mysqli_real_escape_string($con,  $_POST["address"])));
$age = htmlentities((mysqli_real_escape_string($con,  $_POST["age"])));
$phn =  htmlentities((mysqli_real_escape_string($con, $_POST["phn"])));
$roll =  htmlentities((mysqli_real_escape_string($con, $_POST["rollno"])));
$section = htmlentities((mysqli_real_escape_string($con,  $_POST["Section"])));
$year =  htmlentities((mysqli_real_escape_string($con, $_POST["Year"])));
//Image upload
//memo


//-------------------------------------------------------------------------------------
$target_dir = "media/users/memo/";
$filename = strtolower(basename($_FILES["memo"]["name"]));
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$target_file1 = $target_dir . uniqid().".".$imageFileType;
$uploadOk = 1;
// Check if image file is a actual image or fake image

if(isset($_POST["submit"]) && isset($_FILES["memo"])) {
    $check = getimagesize($_FILES["memo"]['tmp_name']);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}else{
	$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded. Make sure image is below 5mb";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["memo"]["tmp_name"], $target_file1)) {
        echo "The file ". $target_file1. " has been uploaded.";
		$memo = $target_file1;
	} else {
        echo "Sorry, there was an error uploading your file.";
    }
}
#---------------------------------------------------------------------------------------
//Passport photo
$target_dir = "media/users/pass_photos/";	
$filename = strtolower(basename($_FILES["pass_photo"]["name"]));
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$target_file = $target_dir . uniqid().".".$imageFileType;
$uploadOk = 1;
// Check if image file is a actual image or fake image

if(isset($_POST["submit"]) && isset($_FILES["pass_photo"])) {
    $check = getimagesize($_FILES["pass_photo"]['tmp_name']);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}else{
	$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded. Make sure image is below 5mb";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pass_photo"]["tmp_name"], $target_file)) {
        echo "The file ". $target_file. " has been uploaded.";	
		$avatar = $target_file;
	} else {
        echo "Sorry, there was an error uploading your file.";
    }
}
#-----------------------------

//database entry
$query = "insert into users(user_fname,user_lname,father_name,dob,address,age,user_gender,pin_year,pin_branch,pin_num,user_email,password,avatar,memo,user_phone) values('".$fname."','".$lname."','".$father_name."','".$dob."','".$address."','".$age."','".$gender."','".$year."','".$section."','".$roll."','".$email."','".$pass."','".$avatar."','".$memo."','".$phn."')";
if(!(mysqli_query($con,$query)))
{
	$err = mysqli_error($con);
	echo $err;
	//echo strcmp($err,'Duplicate entry');
	if(strcmp($err,'Duplicate entry'))
	{
		echo "<script>alert('Seems an user with given Email already exists');window.location.replace('/ngitproject/project/reg.php');</script>";
		
	}
	else
	{
		echo mysqli_error($con);
		
	}
		
}

$query = "insert into scc(email,count) values('".$email."',0)";
if(!(mysqli_query($con,$query)))
{
	$err = mysqli_error($con);
	echo $err;
	//echo strcmp($err,'Duplicate entry');
	if(strcmp($err,'Duplicate entry'))
	{
		echo "<script>alert('Something went wrong in scc table');window.location.replace('/ngitproject/project/reg.php');</script>";
		
	}
	else
	{
		echo mysqli_error($con);
		
	}
		
}


else{
	$u_name = $fname." ".$lname;
	//mailTo(html_entity_decode($email),'new_user',$u_name);
	echo "<script>alert('Registration Successful');window.location.replace('/ngitproject/project/home.php');</script>";
}






?>