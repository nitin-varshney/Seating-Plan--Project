<?php

include ('connection.php');
$id=$_GET['u_id'];
$year= $_POST['year'];
$sem= $_POST['sem'];
$course= $_POST['course'];
$term= $_POST['term'];
$block= $_POST['block'];
$floor= $_POST['floor'];
$room= $_POST['room'];

$sql = "update `seating_plan` set universityroll=$id,year='$year',sem='$sem',course='$course',term='$term',block_no='$block',floor_no='$floor',room_no='$room' where universityroll=$id";

$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Updated Successfully')</script>";
    header('Refresh: 0; URL=./adminpage.php');
} else{
echo "error in data insert";
}

?>