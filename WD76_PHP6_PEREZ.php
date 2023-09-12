<?php
include "connection.php";

$function = $_POST['function'];

if($function == 1){

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $batch = $_POST['batch'];

    $sqlInsertStudent = "INSERT INTO student_tbl(student_fname, student_lname, student_batch) VALUES ('$fname', '$lname', '$batch')
    ";
    mysqli_query($conn, $sqlInsertStudent);
    header("Location: WD76_PHP1_PEREZ.php");


}else if($function == 2){
    $id = $_POST['id'];
    $sqlDeleteStudent = "DELETE FROM student_tbl WHERE student_id = '$id'";
    mysqli_query($conn, $sqlDeleteStudent);
    header("Location: WD76_PHP1_PEREZ.php");

}else if($function == 3){
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $id= $_POST['id'];
    $sqlUpdateStudent = "UPDATE student_tbl SET student_fname = '$fname', student_lname = '$lname' WHERE student_id = '$id'";

    mysqli_query($conn, $sqlUpdateStudent);
    header("Location: WD76_PHP1_PEREZ.php");


}


?>