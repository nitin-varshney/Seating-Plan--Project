<?php

include ('connection.php');
 $id=$_GET['update_id'];
$block= $_POST['block_no'];
$floor= $_POST['floor_no'];
$room= $_POST['room_no'];

$sql = "update `blocks` set b_id=$id,block_no='$block',floor_no='$floor',room_no='$room' where b_id=$id";

$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Updated Successfully')</script>";
    header('Refresh: 0; URL=./adminpage.php');
} else{
echo "error in data insert";
}

?>
