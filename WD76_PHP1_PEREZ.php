<?php 
    Include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $var1 = "BeatLog";
        echo "<h1> $var1 </h1> ";

    $age = 18;

    if ($age >= 18) {
        echo "You are 18 biatch";
    }else {
        echo "You r still kiddo";
    }
    ?>
    <h1>Create Batch</h1>
    <form action="WD76_PHP2_PEREZ.php" method="POST">
        <label for="">Batch Name </label>
            <input type="text" name="batchName">
            <input type="submit">
    </form>
    <h1>List of Batch</h1>
    <ul>
        <?php 
            $sqlShowBatch = "SELECT * FROM batch_tbl";
            $initiateBatch = mysqli_query($conn, $sqlShowBatch);
            while($result = mysqli_fetch_assoc($initiateBatch)){
                echo "
                <li> 
                <div style='display:flex'>

                    <form method='GET' action='WD76_PHP4_PEREZ.php'>
                        <input type='hidden' name='id' value='$result[batch_id]'>
                        <input type='text' name='batchName' value='$result[batch_name]'>
                        <input type='submit' value='UPDATE'>
                        </form>

            ||

            <form method='GET' action='WD76_PHP3_PEREZ.php'>
            <input type='hidden' name='id' value='$result[batch_id]'>
            <input type='submit' value='DELETE'>
                </form>
          </div>
          </li>";
            }
        
        
            ?>
    </ul>

    <hr>
    <h1>Create New Teacher</h1>
    <form action="WD76_PHP5_PEREZ.php" method='POST'>
        <label for="">First Name</label>
        <input type="text" name="firstName">
        <label for="">Last Name</label>
        <input type="text" name="lastName">
        <label for="">Teacher Position</label>
        <input type='hidden' name='function' value='1'>
        <select name="position" id="">
            <?php 
                $sqlPositionList = "SELECT * FROM position_tbl";
                $initiatePositionList = mysqli_query($conn, $sqlPositionList);
                while($result = mysqli_fetch_assoc($initiatePositionList)){
                    echo "
                    <option value='$result[position_id]'>$result[position_name]</option>
                    ";
                }
            ?>
            </select>
        <label for="">Batch</label>
        <select name="batch" id="">
    
            <?php 
                $sqlBatchlist = "SELECT * FROM batch_tbl";
                $initiateBatchList = mysqli_query($conn, $sqlBatchlist);
                while($result = mysqli_fetch_assoc($initiateBatchList)){
                    echo "
                    <option value='$result[batch_id]'>$result[batch_name]</option>
                    ";
                }
            ?>
            </select>
            <input type="submit">
    </form>
    <h1>List of Teachers</h1>
    <ul>
        <?php 
        $sqlTeacherList = "SELECT * FROM teachers_tbl INNER JOIN batch_tbl ON teachers_tbl.teacher_batch = batch_tbl.batch_id";
        $initiateTeacherList = mysqli_query($conn,$sqlTeacherList);
        while($result = mysqli_fetch_assoc($initiateTeacherList)){
            echo "   
            
            <li>
            <div style='display:flex'>

            <form method = 'POST' action = 'WD76_PHP5_PEREZ.php'>
            <input type='text' name='firstName' value='
            $result[teacher_fname]'>
            <input type='text' name='lastName' value='
            $result[teacher_lname]'>
            <input type='text' name='batchName' value='
            $result[batch_name]'>
            <input type='hidden' name='function' value='3'>
            <input type='hidden' name='id' value='$result[teacher_id]'>
            <input type='submit' value='UPDATE'>
            </form>

            <form method='POST' action='WD76_PHP5_PEREZ.php'>
            <input type='hidden' name='function' value='2'>
            <input type='hidden' name='id' value='$result[teacher_id]'>
            <input type='submit' value='DELETE'>
            </form>
            </div>
            </li>
            ";
        }
        
        
        ?>
    </ul>




    <!-- ============================================== -->

    <h1>Create New Student</h1>
    <form action="WD76_PHP6_PEREZ.php" method='POST'>
        <label for="">First Name</label>
        <input type="text" name="firstName">
        <label for="">Last Name</label>
        <input type="text" name="lastName">
        <input type='hidden' name='function' value='1'>
        <label for="">Batch</label>
        <select name="batch" id="">
    
            <?php 
                $sqlBatchlist = "SELECT * FROM batch_tbl";
                $initiateBatchList = mysqli_query($conn, $sqlBatchlist);
                while($result = mysqli_fetch_assoc($initiateBatchList)){
                    echo "
                    <option value='$result[batch_id]'>$result[batch_name]</option>
                    ";
                }
            ?>
            </select>
            <input type="submit">
    </form>
    <h1>List of Students</h1>
    <ul>
        <?php 
        $sqlStudentList = "SELECT * FROM student_tbl INNER JOIN batch_tbl ON student_tbl.student_batch = batch_tbl.batch_id";
        $initiateStudentList = mysqli_query($conn,$sqlStudentList);
        while($result = mysqli_fetch_assoc($initiateStudentList)){
            echo "   
            
            <li>
            <div style='display:flex'>

            <form method = 'POST' action = 'WD76_PHP6_PEREZ.php'>
            <input type='text' name='firstName' value='
            $result[student_fname]'>
            <input type='text' name='lastName' value='
            $result[student_lname]'>
            <input type='text' name='batchName' value='
            $result[batch_name]'>
            <input type='hidden' name='function' value='3'>
            <input type='hidden' name='id' value='$result[student_id]'>
            <input type='submit' value='UPDATE'>
            </form>

            <form method='POST' action='WD76_PHP6_PEREZ.php'>
            <input type='hidden' name='function' value='2'>
            <input type='hidden' name='id' value='$result[student_id]'>
            <input type='submit' value='DELETE'>
            </form>
            </div>
            </li>
            ";
        }
        
        ?>
    </ul>
   
</body>
</html>