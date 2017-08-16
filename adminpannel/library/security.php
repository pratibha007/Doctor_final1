<?php
if ($_SESSION['user'] == null || $_SESSION['user'] == "") {
    $_SESSION['msg'] = "login first";
    header('location:login.php');
}
?>
