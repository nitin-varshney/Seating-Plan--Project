<?php

include ('connection.php');
$id=$_GET['u_id'];
$phonenumber= $_POST['phonenumber'];
$fullname= $_POST['fullname'];
$year= $_POST['year'];
$sem= $_POST['semester'];

$sql = "update `student` set universityroll=$id,phonenumber='$phonenumber',fullname='$fullname',year='$year',sem='$sem' where universityroll=$id";

$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Updated Successfully')</script>";
    header('Refresh: 0; URL=./adminpage.php');
} else{
echo "error in data insert";
}

?>