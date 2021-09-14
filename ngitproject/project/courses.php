<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<title>Courses</title>
</head>
<?php
 session_start();
 include("headerin.php");	
 include("db_connect.php");
 $carray=array();
 //
 //
 //
 	
	//---------------------------------------!!!!!!!!!!!!!!!!!
	$query = "select *  from courses;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		
		if($num_rows >0)
		{   
			while($row = mysqli_fetch_assoc($result))
			{
				//----------------------
				
				$query1 = "select *  from ".$row["course_id"]."_s;" ;
				$result1 = mysqli_query($con,$query1);
				$num_rows1 = mysqli_num_rows($result1);
				
				if($num_rows1 >0)
				{
					while($row2 = mysqli_fetch_assoc($result1))
					{
						if($row2["student_email"] == $_SESSION["semail"])
						{
							array_push($carray,$row2["course_id"]);
						}
					}
				}
				//----------------------
				
			}
		
		}
 /*
 foreach($carray as $bs)
	echo "<br>".$bs;
 */
 
 
 //
 //
 //
$query = "select *  from courses;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		
		if($num_rows >0)
		{   
			echo "<table border='1'><tr><th>Course ID</th><th>Course Name</th><th>Description</th><th>Introductory video</th><th>Fee</th><th>Details</th></tr>";				//------------------------------------function fn which inserts students into course
			while($row = mysqli_fetch_assoc($result))
			{
				//-------------------------------
				if(isset($_POST['cse01'])) { 
				$_SESSION["into"]="cse01";
				include("enrollme.php");
				} 
				else if(isset($_POST['cse02'])) { 
				$_SESSION["into"]="cse02";
				include("enrollme.php"); 
				} 
				else if(isset($_POST['cse03'])) { 
				$_SESSION["into"]="cse03";
				include("enrollme.php"); 
				} 
				else if(isset($_POST['cse04'])) { 
				$_SESSION["into"]="cse04";
				include("enrollme.php"); 
				} 
				else if(isset($_POST['cse05'])) { 
				$_SESSION["into"]="cse05";
				include("enrollme.php"); 
				} 
				else if(isset($_POST['cse06'])) { 
				$_SESSION["into"]="cse06";
				include("enrollme.php"); 
				} 
				else if(isset($_POST['cse07'])) { 
				$_SESSION["into"]="cse07";
				include("enrollme.php"); 
				} 
				else if(isset($_POST['cse08'])) { 
				$_SESSION["into"]="cse08";
				include("enrollme.php"); 
				} 
				else if(isset($_POST['cse09'])) { 
				$_SESSION["into"]="cse09";
				include("enrollme.php"); 
				} 
				
				echo "<form method='post'>";
				//---------------------------------
					echo "<tr><td>".$row["course_id"]."</td>";
					echo "<td>".$row["course_name"]."</td>";
					echo "<td>".$row["cdesc"]."</td>";
					echo "<td> <video width=\"320\" height=\"240\" controls>
										  <source src=".$row["cintro"]." type=\"video/mp4\">
										Your browser does not support the video tag.
										</video>            </td>";
					//+++++++++	
					if (in_array($row["course_id"], $carray))
					  {
					  echo "<td>Rs. ".$row["fee"]."/-</td><td><input type='submit' value='Already Enrolled-".$row["course_id"]."' name=".$row["course_id"]." disabled>";
					echo "</td></tr>";		
					  }
					else
					  {
					  echo "<td>Rs. ".$row["fee"]."/-</td><td><input type='submit' value='Enroll-for-".$row["course_id"]."' name=".$row["course_id"].">";
					echo "</td></tr>";		
					  }
					//+++++++++++	
			}
					echo "</table></form>";
		}

include("footer.php");
// session_start();


?>