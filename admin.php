<?php 

session_start();
$admin_user_name = "admin_bca@gla.ac.in";
$admin_password = "adminBCA@gla";
$uname = trim($_POST['userid'] ," ");
$password = trim($_POST['password'], " ");    
if($uname === $admin_user_name && $password === $admin_password){
    echo "<script>alert('You Have Successfully Logged in')</script>";
    $_SESSION["admin"] = true;
    header('Refresh: 0, URL=./adminpage.php');
}
else {
    echo "<script>alert('Incorrect Credentials')</script>";
    header('Refresh: 0, URL=./index.html');
}   
?>