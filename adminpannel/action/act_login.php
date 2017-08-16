<?php
require_once '../lib/dbConnection.php';

//while login we will creaate session varaible for username
if(isset($_POST['btnLogin'])){
    $user=$_POST['txtuser'];
    $pwd=md5($_POST['txtpwd']);
    
    $query="select * from login where username='$user' and password='$pwd'";
    $result= mysqli_query($conn, $query);
    $data=mysqli_fetch_assoc($result);
    
    if($data>0){
        $_SESSION['user']=$user;
        $_SESSION['role']=$data['role'];
        header('location:../index.php');
    }else
    {
        $_SESSION['msg']="invalid username or password";
        header('location:../login.php');
    }
}


