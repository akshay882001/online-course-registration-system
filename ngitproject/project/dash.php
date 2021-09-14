<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<title>Courses</title>
</head>
<?php
 session_start();
 include("headerin.php");	
 include("db_connect.php");
 ?>
 <body>
	Welcome to Dashboard!
	<?php
	
	
	$query2 = "select count from scc where email='".$_SESSION["semail"]."';" ;
$result2 = mysqli_query($con,$query2);
if(!($result2)){echo mysqli_error($con);}
$num_rows2 = mysqli_num_rows($result2);



//---------------


//---------------

if($num_rows2 >0)
{   
$row2 = mysqli_fetch_assoc($result2);
if($row2["count"]<5)
{
	echo "<script>alert('You need to be enrolled in atleast 5 courses to access dashboard');window.location.replace('/ngitproject/project/courses.php');</script>";
}	
}
	
	
	//---------------------------------------!!!!!!!!!!!!!!!!!
	$query = "select *  from courses;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		
		if($num_rows >0)
		{   
			echo "<table border='1'><tr><th>Course ID</th><th>Course Name</th><th>Status</th><th>Resume</th><th>Assignments</th></tr>";
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
							echo "<tr>
								<td>".$row["course_id"]."</td>
								<td>".$row["course_name"]."</td>
								<td>in progress</td>
								<td><a href='http://localhost/ngitproject/project/resumeLearning.php?cid=".$row["course_id"]."&amp;'>resume learning</a></td>
								<td><a href='http://localhost/ngitproject/project/assignments.php?cid=".$row["course_id"]."&amp;'>assignment</a></td>
							</tr>";
						}
					}
				}
				//?id=2273&amp;course=20&amp;mode=outline;
				//----------------------
				
			}
		
		}

	?>
	
 </body>
 </html>