<?php

include_once'../library/dbConnection.php';
session_start();
if (isset($_POST['btnEdit'])) {
    $id = $_POST['txtid'];
    $doctor_name = $_POST['docname'];
    $specialist_in = $_POST['specialist'];
    $duty_hour = $_POST['duty_hour'];


    $query = "update info set doctor_name='$doctor_name', specialist_in='$specialist_in', duty_hour='$duty_hour' where id=$id ";
    $result = mysqli_query($conn, $query);


    if ($result) {
        $_SESSION['msg'] = "data edited";
        header('location:../edit.php');
    } else {
        $_SESSION['msg'] = "data not edited";
        header('location:../edit.php');
    }
}
?>