<?php

session_start();
$_SESSION['universityroll'] = $_POST['universityroll'];
header("Location: seatingplanusershow.php");
?>