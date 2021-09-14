<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<title>Main Page</title>
</head>
<?php
 session_start();
 include("headerin.php");	
 include("db_connect.php");
?>
<body bgcolor="black">
<form method="post" action="#">

<div class="arrange-horizontally">
<div class="events" >
<fieldset >
Welcome back!
</fieldset >
</div>	


<div class="grid-container" align="left" style="max-height:20%"> 

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
//echo $num_rows2;
echo "<style>
.container {
    position: relative;
    width: 70%;
	background-color:white;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}


.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
      width: 70%;
	background-color:white;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
//  font-size: 16px;
//  padding: 16px 32px;
}
</style>
";
if($num_rows2 >0)
{   
$row2 = mysqli_fetch_assoc($result2);
echo "<h2>Name:".$row2["user_fname"]."  ".$row2["user_lname"]."</h2><br>";


echo"<div class=\"container\">
  <img src='".$row2["avatar"]."'  class=\"image\" style=\"width:100%\" height='30%'>
  <div class=\"middle\">
    <div class=\"text\"><h2>".$row2["user_fname"]."  ".$row2["user_lname"]."</h2><br></div>
  </div>
</div>
";
}
		
 ?>
 <form name="logout" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" /> <input type="submit" name="logout" value="Logout" /></form>
</fieldset>


   </div>
  </div>
   </form>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include("footer.php");
// session_start();
  ?>

</body>

</html>