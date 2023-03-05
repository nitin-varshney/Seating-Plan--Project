<?php

include ('connection.php');

$id=$_GET['u_id'];
$s_name= $_POST['s_name'];
$year= $_POST['year'];
$sem= $_POST['sem'];
$term= $_POST['term'];
$e_date= $_POST['e_date'];
$e_time= $_POST['e_time'];
$e_etime= $_POST['e_etime'];

$sql = "update `date_sheet` set subject_code=$id,subject_name='$s_name',year='$year',sem='$sem',term='$term',exam_date='$e_date',exam_time='$e_time',exam_etime='$e_etime' where subject_code=$id";

$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Updated Successfully')</script>";
    header('Refresh: 0; URL=./adminpage.php');
} else{
echo "error in data insert";
}

?>