<?php
session_start();

if (!isset($_SESSION["admin"])){
    header('Refresh: 0; URL=./login.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://use.fontawasome.com/releases/v5.6.3css/all.css">
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&g=display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>-->
</head>
<body>
    <div class="dropdwn">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Seating Plan @ BCA</label>
            <ul>
                <li><a class="active" href="#">Admin</a></li>
                <li><a href="block.html">Block</a></li>
                <li><a href="subject.html ">Subject</a></li>
                <li><a href="new.html">Student</a></li>
                <li><a href="add.php">Datesheet</a> </li>
                <li><a href="seating1.php">Seating Plan</a></li>
                <?php
                    if(isset($_SESSION["admin"])){
                        echo "<li><a href='./logout.php'>Log out</a></li>";
                    }
                    ?>
            </ul>
        </nav>
    </div><br><br>
    <section1>
    <div class="loginbox1" >
                    <?php
                    include "connection.php";
                                
                    $query = "SELECT * FROM date_sheet";
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
                    <th>Exam Time</th>
                    <th>Exam eTime</th>
                    <th>year</th>
                    <th>sem</th>
                    <th>Exam term</th>
                    <th>Modification</th>
                    
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
                            <td><?php echo $Row['year'];?></td>
                            <td><?php echo $Row['sem'];?></td>
                            <td><?php echo $Row['term'];?></td>
                            <td>
                                <a href="du.php?u_id='<?php echo $Row['subject_code'];?>'"><button class="btn">Update</button></a>
                                <a href="delete.php?del_id='<?php echo $Row['subject_code'];?>'"><button class="btn">Delete</button></a>
                            </td>
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
    </div>
    </section><br><br>
    <section2>
    <div class="loginbox1" >
                    <?php
                    include "connection.php";
                    
            
                    $query = "SELECT * FROM seating_plan";
                    $result = mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);
                    if($row>0){echo "
            <h1>Seating Plan</h1>
            <br>
            <table border=2>
                <thead>
                <th>S. No.</th>
                    <th>University Roll</th>
                    <th>year</th>
                    <th>sem</th>
                    <th>course</th>
                    <th>term</th>
                    <th>block_no</th>
                    <th>floor_no</th>
                    <th>room_no</th>
                    <th>Modification</th>

                    
                </thead>
                <tbody>";
                        if($result){
                            $i=1;
                        while($Row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                            <td><?php echo $i?></td>
                                <td><?php echo $Row['universityroll'];?></td>
                                <td><?php echo $Row['year'];?></td>
                           
                            <td><?php echo $Row['sem'];?></td>
                            <td><?php echo $Row['course'];?></td>
                            <td><?php echo $Row['term'];?></td>
                            <td><?php echo $Row['block_no'];?></td>
                            <td><?php echo $Row['floor_no'];?></td>
                            <td><?php echo $Row['room_no'];?></td>
                            <td>
                                <a href="s12.php?u_id='<?php echo $Row['universityroll'];?>'"><button class="btn">Update</button></a>
                                <a href="sd1.php?del_id='<?php echo $Row['universityroll'];?>'"><button class="btn">Delete</button></a>
                            </td>
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
    </div>
    </section><br><br><br><br>
    <section3>
    <div class="loginbox1" >
                    <?php
                    include "connection.php";
                    
            
                    $query = "SELECT * FROM subjects";
                    $result = mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);
                    if($row>0){echo "
            <h1>Subject</h1>
            <br>
            <table border=2>
                <thead>
                <th>sub_id</th>
                    
                    <th>course</th>
                    <th>s_name</th>
                    
                    <th>s_code</th>
                    <th>year</th>
                    <th>sem</th>
                    <th>Mofification</th>
                </thead>
                <tbody>";
                        if($result){
                        while($Row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                            
                                <td><?php echo $Row['sub_id']?></td>
                                <td><?php echo $Row['course'];?></td>
                                <td><?php echo $Row['s_name'];?></td>
                                <td><?php echo $Row['s_code'];?></td>
                                <td><?php echo $Row['year'];?></td>
                                <td><?php echo $Row['sem'];?></td>
                                <td>
                                <a href="u22.php?up_id='<?php echo $Row['sub_id'];?>'"><button class="btn">Update</button></a>
                                <a href="d2.php?del_id='<?php echo $Row['sub_id'];?>'"><button class="btn">Delete</button></a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                        
                   echo" </tbody>
                </table>";
            } else{
               echo "<h1>Data is not available.</h1>";
            }
                    ?>
    </div>   
    </section><br><br><br>
    <section4>
    <div class="loginbox1" >
                    <?php
                    include "connection.php";
                    
            
                    $query = "SELECT * FROM blocks";
                    $result = mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);
                    if($row>0){echo "
            <h1>Blocks</h1>
            <br>
            <table border=2>
                <thead>
                <th>b_id</th>
                    <th>block_no</th>
                    <th>floor_no</th>
                    <th>room_no</th>
                    <th>Modification</th>
                </thead>
                <tbody>";
                        if($result){
                            
                        while($Row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                            
                            <td><?php echo $Row['b_id'];?></td>
                                <td><?php echo $Row['block_no'];?></td>
                                <td><?php echo $Row['floor_no'];?></td>
                                <td><?php echo $Row['room_no'];?></td>
                                <td>
                            <a href="u12.php?update_id='<?php echo $Row['b_id'];?>'"><button class="btn">Update</button></a>
                            <a href="d1.php?delete_id='<?php echo $Row['b_id'];?>'"><button class="btn">Delete</button></a>
                            </td>
                        </tr>
                            
                            <?php
                
                            
                        }
                    }
                        
                   echo" </tbody>
                </table>";
            } else{
               echo "<h1>Data is not available.</h1>";
            }
                    ?>
    </div>   
    </section><br><br>
    <section5>
    <div class="loginbox1" >
                    <?php
                    include "connection.php";
                    
            
                    $query = "SELECT * FROM student";
                    $result = mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);
                    if($row>0){echo "
            <h1>Student</h1>
            <br>
            <table border=2>
                <thead>
                <th>S. No.</th>
                    <th>universityroll</th>
                    <th>fullname</th>
                    
                    <th>phonenumber</th>
                    <th>year</th>
                    <th>sem</th>
                    
                    <th>Modification</th>
                </thead>
                <tbody>";
                        if($result){
                            $i=1;
                        while($Row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                            <td><?php echo $i?></td>
                                <td><?php echo $Row['universityroll'];?></td>
                                <td><?php echo $Row['fullname'];?></td>
                                <td><?php echo $Row['phonenumber'];?></td>
                            <td><?php echo $Row['year'];?></td>
                            <td><?php echo $Row['sem'];?></td>
                            <td>
                            <a href="u32.php?u_id='<?php echo $Row['universityroll'];?>'"><button class="btn">Update</button></a>
                            <a href="d3.php?d_id='<?php echo $Row['universityroll'];?>'"><button class="btn">Delete</button></a>
                            </td>
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
    </div>   
    </section>
</body>
</html>