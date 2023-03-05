<?php

include ('connection.php');

$universityroll = $_POST['universityroll'];
$year = $_POST['year'];
$sem = $_POST['sem'];
$course = $_POST['course'];
$term = $_POST['term'];
$block = $_POST['block'];
$floor = $_POST['floor'];
$room = $_POST['room'];

$query = "INSERT INTO seating_plan (universityroll,year,sem,course,term,block_no,floor_no,room_no) VALUES ('$universityroll','$year','$sem','$course','$term','$block','$floor','$room')";
$result2 = mysqli_query($conn,$query);
if($result2){
    echo "<script>alert('Seating Plan Uploaded Successfully')</script>";
    header('Refresh: 0; URL=./adminpage.php');
} else{
    echo "error in data insert";
}

