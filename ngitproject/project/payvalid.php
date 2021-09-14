<?php
//require 'vendor/autoload.php';
SESSION_start();
 include("db_connect.php");
//$client=new MongoDB\Client;
//$db=$client->account;
$mdb = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$qry = new MongoDB\Driver\Query([]);
$bulk = new MongoDB\Driver\BulkWrite();
$qrya = new MongoDB\Driver\Query([]);
$bulka = new MongoDB\Driver\BulkWrite();
//$updateRec = new MongoDB\Driver\BulkWrite();
$rows=$mdb->executeQuery("account.paydetails",$qry);
$accn=$_POST["acc"];
$pass=$_POST["password"];
//$collection=(new MongoDB\Client)->account->paydetails;
$a=$_SESSION["amount"];
//echo "$accn<br>";
//echo "$pass<br>";
//echo "$a<br>";
$flag=0;
$_SESSION["acn1"]=$accn;
foreach ($rows as $row){
	//echo $row->acc_number."<br>";
	if($row->acc_number==$accn){
		//echo "Account number exist<br>";
		if($row->password==$pass){
			//echo "Account password is correct<br>";
			if($row->user_email!=$_SESSION["semail"])
			{
				echo "<script>alert(\"This account number does not belongs to you ".$_SESSION["semail"]."\");window.location.href=\"courses.php\"</script>";
			}
			else{
			if($row->balance>=$a){
				$flag=1;
				//$updateResult=$collection->updateOne(['acc_number'=>$accn],['$set'=>['balance'=>15000]]);
				$bal=($row->balance)-($a);
				$bulk->update(['acc_number'=>$row->acc_number],['$set'=>['balance'=>$bal]],['multi'=>true]);
				$result = $mdb->executeBulkWrite('account.paydetails', $bulk);
				//include("");
					$query = "insert into ".$_SESSION["into"]."_s (course_id,student_email) values('".$_SESSION["into"]."','".$_SESSION["semail"]."')";
					if(!(mysqli_query($con,$query)))
					{
						$err = mysqli_error($con);
						echo $err;
						//echo strcmp($err,'Duplicate entry');
						if(strcmp($err,'Duplicate entry'))
						{
							echo "<script>alert('Seems you have already enrolled in this course');window.location.replace('/ngitproject/project/homein.php');</script>";
							
						}
						else
						{
							echo mysqli_error($con);
							
						}
							
					}
					else{
						//mailTo(html_entity_decode($email),'new_user',$u_name);
						$_SESSION["counted"]=$_SESSION["counted"]+1;
					$query = "update scc set count= '".$_SESSION["counted"]."' where email='".$_SESSION["semail"]."'";
					if(!(mysqli_query($con,$query)))
					{
						$err = mysqli_error($con);
						echo $err;
						//echo strcmp($err,'Duplicate entry');
						if(strcmp($err,'Duplicate entry'))
						{
							echo "<script>alert('Error!');window.location.replace('/ngitproject/project/homein.php');</script>";
							
						}
						else
						{
							echo mysqli_error($con);
							
						}
							
					}
					$doca=array('cid'=>$_SESSION["into"],'user_email'=>$_SESSION["semail"],'assc'=>0);
					$bulka->insert($doca);
					$res=$mdb->executeBulkWrite('account.asscount',$bulka);
					echo "<script>alert('Enrolled Successfully');window.location.replace('/ngitproject/project/courses.php');</script>";
				}
			}
		}
		}
		else{
			$em=$row->user_email;
			echo "<script>alert(\"Incorrect password for ".$_SESSION["semail"]."\");window.location.href=\"makepay.php\"</script>";
		}
	}
	
}
if($flag==0)
	echo"<script>alert('account details not found, please register your account no.');window.location.replace('/ngitproject/project/accreg.php')</script>";
?>