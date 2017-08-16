<?php

include_once'../library/dbConnection.php';
session_start();
if (isset($_POST['addmoredoc'])) {
    $doctor_name = $_POST['docname'];
    $specialist_in = $_POST['specialist'];
    $duty_hour = $_POST['duty_hour'];
    

    $query = "insert into info (doctor_name, specialist_in, duty_hour) values ('$doctor_name', '$specialist_in','$duty_hour')";
    $result = mysqli_query($conn, $query);
    $data=mysqli_fetch_assoc($result);

    if ($result) {
        $_SESSION['msg'] = "doctor's name saved";
        
        header('location:../services.php');
    }
                else {
        $_SESSION['msg'] = "doctor's name not saved";
        header('location:../contactus.php');
       
    }
 
}
?>
      