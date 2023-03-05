<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seating Plan</title> 
    <link rel="stylesheet" href="css/seatingplan.css">
</head>
<body>
    <div class="loginbox" style="width: fit-content;
                                height: fit-content;">
                    <?php
                    include "connection.php";
                    $universityroll = $_SESSION['universityroll'];
                    $query = "SELECT * FROM seating_plan WHERE universityroll='$universityroll'";
                    $result1 = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($result1);
                    if($row>0){echo "
            <h1>Seating Plan</h1>
            <br>
            <table border=2>
                <thead>
                
                    <th>universityroll</th>
                    <th>block_no</th>
                    
                    <th>floor_no</th>
                    <th>room_no</th>
                </thead>
                <tbody>";
                        if($result1){
                            
                            while($Row = mysqli_fetch_array($result1)){
                        ?>
                        <tr>
                            <td><?php echo $Row['universityroll'];?></td>
                            <td><?php echo $Row['block_no'];?></td>
                           
                            <td><?php echo $Row['floor_no'];?></td>
                            <td><?php echo $Row['room_no'];?></td>
                        </tr>
                        <?php
                         $row--;   
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
        <br><a href="student.html"><input value="Back" class="btn"  style=" text-align: center;" ></a> 
    </div>
</body>
</html>