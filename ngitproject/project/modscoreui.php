<?php
 session_start();
 include("headerin.php");	
 include("db_connect.php");
 
$mdb = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$qry = new MongoDB\Driver\Query([]);
$bulk = new MongoDB\Driver\BulkWrite();

$rows=$mdb->executeQuery("account.score",$qry);
foreach
 
 echo "
 
 <form method=\"post\" action=\"modscore.php\">
	<input type=\"text\" name=\"\" required /> <br><br>
	<button type=\"submit\"  name=\"\"></button>
</form>
 
 ";
 
 
 
 ?>
 