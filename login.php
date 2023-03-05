<?php

include('./connection.php');
if(isset($_POST['login'])){
    $username = $_POST['userid'];
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email_Search = "SELECT * FROM newuser WHERE userid = '$username'";
    $query = mysqli_query($conn, $email_Search);
    $email_Count = mysqli_num_rows($query);
    if($email_Count > 0){
        $email_pass = mysqli_fetch_assoc($query);
        $dbPass = $email_pass['password'];
        if($password == $dbPass){
            echo "<script> alert('Login Succesful')</script>";
            header('Refresh: 0; URl=./student.html');
        } else {
            echo "<script> alert('Password Incorrect')</script>";
            header('Refresh: 0; URL=./login1.html');
        }
    } else {
        echo "<script> alert('Invalid Email')</script>";
        header('Refresh: 0; URL=./login1.html');
    }
}