<?php

include('login2.php'); // Includes Login Script
//if(isset($_SESSION['login_user'])){
//header("location: homepage.php"); // Redirecting To Profile Page
//}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="table">
            <form action="" method="post">
        <table>
            <tr>
            <td id="head">Login Information</td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
            
           <td id="username" name="username">Username:<input id="name" name="username" placeholder="username" type="text"></td>
            </tr>
            
        <tr>
            <td id="password">Password:<input id="pin" name="password" placeholder="********" type="password"></td>
        </tr>
            <tr>
            <td><div class="center"><input name="submit" type="submit" value=" Login "></div></td>
            </tr>
        </table>
            </form>
        </div>
       
    </body>
</html>
