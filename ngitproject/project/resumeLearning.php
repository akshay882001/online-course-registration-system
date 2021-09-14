<?php
session_start();
include("headerin.php");
include("db_connect.php");
$cid=$_GET["cid"];
$student_id=$_SESSION["semail"];
$connect= new MongoDB\Driver\Manager("mongodb://localhost:27017");
$qry = new MongoDB\Driver\Query([]);
$rows=$connect->executeQuery("account.links",$qry);
$count=1;
echo"
<html>
    <head>
        <title>Resume Learning</title>
    </head>
    <body>
        <table border='10'><tr><th>Lecture</th><th>Video</th></tr>";
        foreach($rows as $r){
            if($r->cid==$cid){
                echo"<tr>
                    <td>
                        lecture-$count(".$r->data.")";
                        $count++;
                        echo"
                    </td>
                    <td>
                    <iframe width=\"887\" height=\"530\" src=".$r->link." frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                    </td>";
            }
		}
        echo"
    </body>
</html>
";
?>