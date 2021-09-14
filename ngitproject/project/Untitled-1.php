<?php
    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $qry = new MongoDB\Driver\Query([]);
    $rows = $mng->executeQuery("test.text2", $qry);
    foreach ($rows as $row) {
        echo nl2br("$row->person\n");
    }

?>