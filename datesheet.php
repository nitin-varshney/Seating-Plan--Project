<?php

include ('connection.php');

if (isset($_POST['btn'])){
    $s_name = $_POST['s_name'];
    $s_code = $_POST['s_code'];
    $year = $_POST['year'];
    $sem = $_POST['sem'];
    $term = $_POST['term'];
    $e_date = $_POST['e_date'];
    $e_time = $_POST['e_time'];
    $rs_code = $_POST['rs_code'];

    echo $rs_code;
    // $query = "UPDATE `Date_sheet` SET subject_code = '$s_code',
    //                                 subject_name = '$s_name',
    //                                 year = '$year',
    //                                 sem = '$sem',
    //                                 term = '$term',
    //                                 exam_date = '$e_date',
    //                                 exam_time = '$e_time',
    //                                 exam_etime = '$e_etime'
    //             WHERE $_";
} else {
    $s_name = $_POST['s_name'];
    $s_code = $_POST['s_code'];
    $year = $_POST['year'];
    $sem = $_POST['sem'];
    $term = $_POST['term'];
    $e_date = $_POST['e_date'];
    $e_time = $_POST['e_time'];
    $e_etime = $_POST['e_etime'];

    $query = "INSERT INTO Date_sheet (subject_code,subject_name,year,sem,term,exam_date,exam_time,exam_etime) VALUES ('$s_code','$s_name','$year','$sem','$term','$e_date','$e_time','$e_etime')";

    $result = mysqli_query($conn,$query);
    if($result){
        echo "<script>alert('Welcome')</script>";
        header('Refresh: 0; URL=./adminpage.php');
    } else{
        echo "error in data insert";
    }
}