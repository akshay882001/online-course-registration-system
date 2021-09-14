<!doctype.html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<?php
//session_start();
include("header.php");
include("db_connect.php");
 ?>
<form method="post" action="addcourse.php" enctype="multipart/form-data" name="reg" >
  <div class="container" align="center" >
  <fieldset>
    <hr>
   <label for="cid"><b>Course ID</b></label><br>
    <input type="text" placeholder="Enter Course ID" name="cid" required><br>
	
   <label for="cn"><b>Course Name</b></label><br>
    <input type="text" placeholder="Enter Course name" name="cn" required>
	<br>

	<label for="cdesc"><b>Description</b></label><br>
	<textarea class="add" name="cd" rows="10" cols="10" required>
	</textarea><br>
	
	<label><b> Introductory Video:</b></label>
	<input type="file" name="Iv" required /> <br><br>
	
	
    <button type="submit"  name="submit" class="registerbtn">Add Course</button>
</fieldset>
  
  </div>
  </form>
<div>
<?php
include("footer.php");
// session_start();
  ?>
</div>

</body>
</html>
