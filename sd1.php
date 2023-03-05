<?php

include 'connection.php';
if(isset($_GET['del_id'])){
    $id=$_GET['del_id'];
    $sql= "delete from `seating_plan` where universityroll=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Deleted Successfull')</script>";
        header('Refresh: 0; URL=./adminpage.php');
    }else{
        die(mysli_error($conn));
    }
}