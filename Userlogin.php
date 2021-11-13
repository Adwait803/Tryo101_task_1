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
		color:blue;
             

		}

        </style>
    </head>
    <body>
        <h1 style="text-align:center;font-size:60px;margin-top:50px;font-family:arial;color:green;">Project Managenent System</h1>
       <hr>
<div>
            <h2 style="text-align: center;"><u>Login</u></h2>
            <form name="login" action="chk.php" method="post" style="text-align: center;">
                <table style="margin-left:auto;margin-right:auto;" cellpadding="08" cellspacing="08">
                    <tr>
                        <td><label for="user_id">User_id : </label></td>
                        <td><input type="text" id="user_id"></td>                            
                    </tr>
                    <tr>
                        <td><label for="password">Password : </label></td>
                        <td><input type="password" id="passwd"></td>
                    </tr>
                </table>
<hr>
                <input type="submit" id="submit" value="login" style="text-align: center;">
            </form>
        </div>
    </body>
</html>