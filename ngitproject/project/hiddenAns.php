<?php
    session_start();
    include("headerin.php");
    include("db_connect.php");
    $target_dir = "media/assignments/";
    $filename = strtolower(basename($_FILES["upload"]["name"]));
    $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
    if($imageFileType!="docx" && $imageFileType!="pdf"){
        echo "<script>alert(\"assignment type should be (PDF).pdf or (WORD).docx\");window.location.href=\"dash.php\"</script>";
    }
	else{
    $target_file = $target_dir .$_SESSION["sassid"].$_SESSION["semail"].".".$imageFileType;
    // Check if image file is a actual image or fake image
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        //echo "The file ".$_SESSION["sassid"].$_SESSION["semail"]. " has been uploaded.";
        $connect= new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $qry = new MongoDB\Driver\Query([]);
        $rows=$connect->executeQuery("account.lass",$qry);
        $bulk = new MongoDB\Driver\BulkWrite();
        $doc=array('cid'=>$_SESSION["scid"],'user_email'=>$_SESSION["semail"],'cassid'=>$_SESSION["sassid"]);
        $bulk->insert($doc);
        $res=$connect->executeBulkWrite('account.lass',$bulk);
        //---
        $qrys = new MongoDB\Driver\Query([]);
        $rowss=$connect->executeQuery("account.score",$qrys);
        $bulks = new MongoDB\Driver\BulkWrite();
        $docs=array("id"=>$_SESSION["sassid"].$_SESSION["semail"],"score"=>0);
        $bulks->insert($docs);
        $ress=$connect->executeBulkWrite('account.score',$bulks);
        echo "<script>alert(\"assignment uploaded sucessfully\");window.location.href=\"dash.php\"</script>";
    }
    else {
        echo "Sorry, there was an error uploading your file.";
    }}

/*
db.links.insertMany([ {cid : "cse01",data : "intro",link : "https://www.youtube.com/embed/WPvGqX-TXP0"},{
       cid : "cse01",
       data : "intro",
       link : "https://www.youtube.com/embed/WPvGqX-TXP0"
},
{
  
       cid : "cse01",
       data : "intro-1",
       link : "https://www.youtube.com/embed/QuPTPv9LriY"
},
{
  
       cid : "cse02",
       data : "intro",
       link : "https://www.youtube.com/embed/_uQrJ0TkZlc"
},
{
  
       cid : "cse03",
       data : "intro",
       link : "https://www.youtube.com/embed/dEFlb0OvNDg"
},
{
  
       cid : "cse04",
       data : "intro",
       link : "https://www.youtube.com/embed/dEFlb0OvNDg"
},
{
  
       cid : "cse05",
       data : "intro",
       link : "https://www.youtube.com/embed/dEFlb0OvNDg"
},
{
  
       cid : "cse06",
       data : "intro",
       link : "https://www.youtube.com/embed/QuPTPv9LriY"
},
{
  
       cid : "cse07",
       data : "intro",
       link : "https://www.youtube.com/embed/QuPTPv9LriY"
},
{
  
       cid : "cse08",
       data : "intro",
       link : "https://www.youtube.com/embed/_uQrJ0TkZlc"
}]);





db.courseAssignments.insertMany(
[
{cid : "cse02", assid : "cse02a3", questions : "test3" },
{cid : "cse03", assid : "cse03a1", questions : "test1" },
{cid : "cse04", assid : "cse04a1", questions : "test1" },
{cid : "cse04", assid : "cse04a2", questions : "test2" },
{cid : "cse04", assid : "cse04a3", questions : "test3" },
{cid : "cse04", assid : "cse04a4", questions : "test4" },
{cid : "cse05", assid : "cse05a1", questions : "test1" },
{cid : "cse05", assid : "cse05a2", questions : "test2" },
{cid : "cse05", assid : "cse05a3", questions : "test3" },
{cid : "cse06", assid : "cse06a1", questions : "test1" },
{cid : "cse06", assid : "cse06a2", questions : "test2" },
{cid : "cse06",	assid : "cse06a3", questions : "test3" },
{cid : "cse07", assid : "cse07a1", questions : "test1" },
{cid : "cse08", assid : "cse08a1", questions : "test1" },
{cid : "cse08", assid : "cse08a2", questions : "test2" },
{cid : "cse08", assid : "cse08a3", questions : "test3" },
{cid : "cse09", assid : "cse09a2", questions : "test2" },
{cid : "cse09", assid : "cse09a1", questions : "test1" }
]);


*/?>