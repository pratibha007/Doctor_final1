<?php

include_once'../library/dbConnection.php';
session_start();
if (isset($_POST['btnAdd'])) {
    $patients_name = $_POST['patientname'];
    $doctor = $_POST['doctorname'];
    $symptoms = $_POST['symp'];
    $questions=$_POST['question'];

    $query = "insert into send (patients_name, doctor, symptoms, questions) values ('$patients_name', '$doctor','$symptoms','$question')";
    $result = mysqli_query($conn, $query);


    if ($result) {
        $_SESSION['msg'] = "data saved";
        header('location:../index.php');
    } else {
        $_SESSION['msg'] = "data not saved";
        header('location:../contactus.php');
       
    }
}

?>