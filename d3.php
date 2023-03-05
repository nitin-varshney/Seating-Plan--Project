<?php

include 'connection.php';
if(isset($_GET['d_id'])){
    $id=$_GET['d_id'];
    $sql= "delete from `student` where universityroll=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Deleted Successfull')</script>";
        header('Refresh: 0; URL=./adminpage.php');
    }else{
        die(mysli_error($conn));
    }
}