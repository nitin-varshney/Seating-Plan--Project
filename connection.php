<?php
$db_Host = "localhost";
$db_Username = "root";
$db_Password = "";
$db_Base = "newuser";

$conn = mysqli_connect($db_Host, $db_Username, $db_Password, $db_Base);
if($conn->connect_error){
    die("Connection Failed");
}
?>