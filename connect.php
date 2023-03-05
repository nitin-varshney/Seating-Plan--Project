<?php

include ('connection.php');

$universityroll = $_POST['universityroll'];
$fullname =  $_POST['fullname'];
$phonenumber = $_POST['phonenumber'];
$year =  $_POST['year'];
$sem =  $_POST['semester'];    

$query = "INSERT INTO student(universityroll,fullname,phonenumber,year,sem) VALUES ('$universityroll','$fullname','$phonenumber', '$year','$sem')";

$result = mysqli_query($conn,$query);
if($result){
    echo "<script>alert('Welcome')</script>";
    header('Refresh: 0; URL=./adminpage.php');
} else{
    echo "error in data insert";
}