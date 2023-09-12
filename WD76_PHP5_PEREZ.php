<?php
include "connection.php";

$function = $_POST['function'];

if($function == 1){

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $position = $_POST['position'];
    $batch = $_POST['batch'];

    $sqlInsertTeacher = "INSERT INTO teachers_tbl(teacher_fname, teacher_lname, teacher_position, teacher_batch) VALUES ('$fname', '$lname', '$position', '$batch');
    ";
    mysqli_query($conn, $sqlInsertTeacher);
    header("Location: WD76_PHP1_PEREZ.php");


}else if($function == 2){
    $id = $_POST['id'];
    $sqlDeleteTeacher = "DELETE FROM teachers_tbl WHERE teacher_id = '$id'";
    mysqli_query($conn, $sqlDeleteTeacher);
    header("Location: WD76_PHP1_PEREZ.php");
}else if($function == 3){
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $id= $_POST['id'];
    $sqlUpdateTeacher = "UPDATE teachers_tbl SET teacher_fname = '$fname', teacher_lname = '$lname' WHERE teacher_id = '$id'";

    mysqli_query($conn, $sqlUpdateTeacher);
    header("Location: WD76_PHP1_PEREZ.php");



}


?>