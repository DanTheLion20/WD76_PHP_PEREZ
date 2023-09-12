<?php 
    Include "connection.php";
    $batch = $_POST['batchName'];

    echo $batch;

    $sqlInsert = "INSERT INTO batch_tbl (batch_name) VALUES ('$batch')";
    mysqli_query($conn, $sqlInsert);
    header("Location: WD76_PHP1_PEREZ.php");



?>