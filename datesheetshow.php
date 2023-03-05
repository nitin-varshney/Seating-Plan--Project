<?php

session_start();

$_SESSION['year']=$_POST['year'];
$_SESSION['sem']=$_POST['sem'];
$_SESSION['term']=$_POST['term'];

header("Location: datesheetusershow.php");