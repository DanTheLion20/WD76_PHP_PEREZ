<?php 
include "connection.php";

$id = $_GET['id'];
$name = $_GET['batchName'];

$sqlUpdate = "UPDATE batch_tbl SET batch_name = '$name' WHERE batch_id = '$id'";
mysqli_query($conn, $sqlUpdate);
header("Location: WD76_PHP1_PEREZ.php");


echo "$id $name";

?>