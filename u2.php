<?php

include ('connection.php');

$id=$_GET['up_id'];
$s_name = $_POST['s_name'];
$s_code = $_POST['s_code'];
$year = $_POST['year'];
$sem = $_POST['sem'];
$course = $_POST['course'];

$sql = "update `subjects` set sub_id=$id,s_name='$s_name',s_code='$s_code',year='$year',sem='$sem',course='$course' where sub_id=$id";

$result = mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('Update Successfully')</script>";
    header('Refresh: 0; URL=./adminpage.php');
} else{
    echo "error in data update";
}