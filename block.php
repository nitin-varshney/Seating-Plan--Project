<?php

include ('connection.php');

$block = $_POST['block'];
$floor = $_POST['floor'];
$room = $_POST['room'];

$query = "INSERT INTO blocks (block_no,floor_no,room_no) VALUES ('$block','$floor','$room')";

$result = mysqli_query($conn,$query);
if($result){
    echo "<script>alert('Welcome')</script>";
    header('Refresh: 0; URL=./adminpage.php');
} else{
    echo "error in data insert";
}