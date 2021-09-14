<?php
SESSION_start();
include("db_connect.php");

$mdb = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$qry = new MongoDB\Driver\Query([]);
$bulk = new MongoDB\Driver\BulkWrite();




?>