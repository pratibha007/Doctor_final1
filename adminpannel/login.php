<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </p>
        <form method="post" action="actions/act_login.php">
        Username<br>
        <input type="text" name="txtuser" />
        <br><br>
        Password<br>
        <input type="text" name="txtpwd" />
        <br><br>
        <input type="submit" name="btnLogin" value="Login" />
        </form>
    </body>
</html>
