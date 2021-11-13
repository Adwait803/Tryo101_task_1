<?php

?>

<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <title>index page</title>
        <style>
            body
            {
                background-image: url(index.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
            }
            #log
            {
                margin-left: 500px;
                font-size: larger;
                color: blue;
            }
            #reg
            {
                margin-left: 150px;
                font-size: larger;
                color:blue;
            }
        </style>
    </head>
    <body>
        <h1 style="text-align:center;font-size:60px;margin-top:150px;color:violet;">Project Managenent System</h1>
<hr>
        <a href="login.php" target="_self" id="log">Login</a>
        <a href="register.php" target="_self" id="reg">Register</a>
<hr>   
 </body>
</html>