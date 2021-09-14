<?php
SESSION_start();
$mdb1=new MongoDB\Driver\Manager("mongodb://localhost:27017");
$qry1 = new MongoDB\Driver\Query([]);
$bulk1 = new MongoDB\Driver\BulkWrite();
$rows=$mdb1->executeQuery("account.paydetails",$qry1);
$an1=$_POST["ac1"];
$pas1=$_POST["pass"];
$uid=$_SESSION["semail"];
$bl=20000;
if($_SESSION["acn1"]==$an1){
$doc=array('user_email'=>$uid,'acc_number'=>$an1,'password'=>$pas1,'balance'=>$bl);
$bulk1->insert($doc);
$res=$mdb1->executeBulkWrite('account.paydetails',$bulk1);
echo "<script>alert('Account registered successfully');window.location.replace('/ngitproject/project/courses.php');</script>";
}
else
{
	echo "<script>alert('Account number mismatched 😂');window.location.replace('/ngitproject/project/courses.php');</script>";
}
?>