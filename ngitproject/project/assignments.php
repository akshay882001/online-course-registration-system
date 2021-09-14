<?php
session_start();
include("headerin.php");
include("db_connect.php");
$cid=$_GET["cid"];
$_SESSION["scid"]=$cid;
$student_id=$_SESSION["semail"];
$connect= new MongoDB\Driver\Manager("mongodb://localhost:27017");
$qry = new MongoDB\Driver\Query([]);
$rows=$connect->executeQuery("account.courseAssignments",$qry);
$qryc = new MongoDB\Driver\Query([]);
$rowsc=$connect->executeQuery("account.asscount",$qryc);
$c=0;
foreach($rowsc as $rc){
    if($cid==$rc->cid && $rc->user_email==$student_id){
        $c=$rc->assc;
        break;
    }
}
$c=$c+1;
echo"
<html>
    <head>
        <title> assigments</title>
    </head>
    <body>
        <form method='POST' action='hiddenAns.php' enctype='multipart/form-data' name='reg' >
            <table border='10'><tr><th>assignments</th><th>questions</th><th>upload</th><th>score</th></tr>";
            foreach($rows as $r){
                if($r->cid==$cid){
                    if((int)substr($r->assid,6)<$c){
                        echo"<tr>
                            <td>
                                assignment-".substr($r->assid,strlen($r->assid)-1)."
                            </td>
                            <td>      
                                $r->questions
                            </td>
                            <td>
                                you have already upload file
                            </td>
                            <td>";
                            $qrys = new MongoDB\Driver\Query([]);
                            $rowss=$connect->executeQuery("account.score",$qrys);
                            foreach($rowss as $rs){
                                if($rs->id==$r->assid.$student_id){
                                    echo $rs->score;
                                    echo"</br>";
                                }
                            }
                            echo "</td>
                        </tr>";
                    }
                    if((int)substr($r->assid,6)==$c){
                        $_SESSION["sassid"]=$r->assid;
                        echo"<tr>
                            <td>
                                assignment-".substr($r->assid,strlen($r->assid)-1)."
                            </td>
                            <td>      
                                $r->questions
                            </td>
                            <td>
                                <input type='file' name='upload'/> <br><br>
                                <button type='submit' name='upload'>upload</button>
                            </td>
                            <td>      
                            </td>
                        </tr>";
                    }
                    if((int)substr($r->assid,6)>$c){
                        echo"<tr>
                            <td>
                                assignment-".substr($r->assid,strlen($r->assid)-1)."
                            </td>
                            <td>      
                                $r->questions
                            </td>
                            <td>      
                            </td>
                            <td>      
                            </td>
                        </tr>";
                    }
                }
            }
            echo"
            </table>

        </form>
    </body>
</html>
";
?>