<?php

include ('connection.php');


$s_name = $_POST['s_name'];
$s_code = $_POST['s_code'];
$year = $_POST['year'];
$sem = $_POST['sem'];
$course = $_POST['course'];

$query = "INSERT INTO subjects (s_name,s_code,year,sem,course) VALUES ('$s_name','$s_code','$year','$sem','$course')";

$result = mysqli_query($conn,$query);
if($result){
    echo "<script>alert('Welcome')</script>";
    header('Refresh: 0; URL=./adminpage.php');
} else{
    echo "error in data insert";
}