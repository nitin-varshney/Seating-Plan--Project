<?php

include 'connection.php';
if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    $sql= "delete from `blocks` where b_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Deleted Successfull')</script>";
        header('Refresh: 0; URL=./adminpage.php');
    }else{
        die(mysli_error($conn));
    }
}