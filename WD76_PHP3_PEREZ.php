<?php 
include "connection.php";

$id = $_GET['id'];

$sqlDelete = "DELETE FROM batch_tbl WHERE batch_id = '$id'";
mysqli_query($conn, $sqlDelete);
header("Location: WD76_PHP1_PEREZ.php");
echo $id;

?>