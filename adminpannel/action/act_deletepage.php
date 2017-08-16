<?php

include_once'../library/dbConnection.php';
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "delete from info  where id=$id ";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['msg'] = "data deleted";
        header('location:../edit.php');
    } else {
        $_SESSION['msg'] = "data not deleted";
        header('location:../edit.php');
    }
}
?>