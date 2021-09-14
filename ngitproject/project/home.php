<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<title>Student Portal</title>
</head>
<?php
 session_start();
 session_destroy();
 session_start();
 include("header.php");	
 include("db_connect.php");
?>
<body >
<form method="post" action="validate.php">
<div class="arrange-horizontally">
<div class="events">
<fieldset ><center>
<img src="l.png"  height="100%" width="100%"></center><br><br><br><br>
</fieldset >
</div>	

<div class="grid-container" align="left" style="max-height:30%">

<fieldset >
 <center><img src="log.png"  height="10%" width="20%"></center>
 <center><big>Log in</big></center><br>
     
    <label for="Email">Email</label>
    <input type="text" name="email"  placeholder="Your Email.." required>  
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Your password.." required>

    
    <a href="#">Forgot password</a> 
    ------<a href="reg.php"> register</a>

<br>
<center><button type="submit" class="button" style="align:middle" ><span>log in </span></button></center>
  </fieldset>
 
</div>
</div>
   </form>
<?php
include("footer.php");
// session_start();
  ?>

</body>

</html>