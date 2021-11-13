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
             div{
                 color:orange;
                }

        </style>
    </head>
    <body>
        <h1 style="text-align:center;color:black;font-size:60px;margin-top:50px;"><u>Project Managenent System</u></h1>
        <div>
            <h2 style="text-align:left;"><u>Register</u></h2>
            <form name="register" action="add_user.php" method="post" style="text-align:left;">
                <table  cellpadding="08" cellspacing="08">
                    <tr>
                        <td><label for="user_id">Name : </label></td>
                        <td><input type="text" id="name"></td>                            
                    </tr>
                    <tr>
                        <td><label for="user_id">Email_id : </label></td>
                        <td><input type="text" id="user_id"></td>                            
                    </tr>
                    <tr>
                        <td><label for="user_id">User_id : </label></td>
                        <td><input type="text" id="user_id"></td>                            
                    </tr>
                    <tr>
                        <td><label for="password">Password : </label></td>
                        <td><input type="password" id="passwd"></td>
                    </tr>
                </table>
                <span >
                    <label for="gender">Gender :</label>
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                    <input type="radio" name="gender">Others
                </span><br><br>
                <input type="submit" id="submit" value="login" style="text-align: left;">
            </form>
        </div>
    </body>
</html>