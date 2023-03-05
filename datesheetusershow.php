<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datesheet</title>
    <link rel="stylesheet" type="text/css" href="css/datesheetshow.css">
</head>
<body>
    <div class="loginbox">
                    <?php
                    include "connection.php";
                    // echo $_SESSION["year"];
                    // echo  $_SESSION['sem'];
                    // echo $_SESSION['term'];
                    $year = $_SESSION['year'];
                    $sem = $_SESSION['sem'];
                    $term = $_SESSION['term'];
                    $query = "SELECT * FROM date_sheet WHERE year='$year' AND sem='$sem' AND term='$term'";
                    $result = mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);
                    if($row>0){echo "
            <h1>Datesheet</h1>
            <br>
            <table border=2>
                <thead>
                <th>S. No.</th>
                    <th>Subject code</th>
                    <th>Subject name</th>
                    
                    <th>Exam Date</th>
                    <th>Exam Start Time</th>
                    <th>Exam End Time</th>

                </thead>
                <tbody>";
                        if($result){
                            $i=1;
                        while($Row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                            <td><?php echo $i?></td>
                                <td><?php echo $Row['subject_code'];?></td>
                                <td><?php echo $Row['subject_name'];?></td>
                           
                            <td><?php echo $Row['exam_date'];?></td>
                            <td><?php echo $Row['exam_time'];?></td>
                            <td><?php echo $Row['exam_etime'];?></td>
                        </tr>
                            <?php
                            $row--;
                            $i++;
                        }
                    }
                        
                   echo" </tbody>
                </table>";
            } else{
               echo "<h1>Data is not available.</h1>";
            }
                        ?>
        <style>
            .btn
 {
     border: none;
     outline: none;
     height: 30px;
     width: 30%;
     background: #fff;
     color: #000;
     font-size: 18px;
     border-radius: 4px;
 }

 .btn:hover
 {
     cursor: pointer;
     background-color: rgb(137, 150, 25);
     color: #000;
     align-items: center;
 }
        </style>
        <br><a href="student.html"><input value="Back" class="btn"  style=" text-align: center; cursor: pointer" ></a> 
    </div>
</body>
</html>