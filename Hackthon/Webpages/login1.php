<?php

session_start();

$db=mysqli_connect("localhost","root","","kodipay");

if (isset($_POST['submit'])) {

    if(empty($_POST['username'])&&empty($_POST['password'])) {
        $error="Fields are Mandatory";
    } else {

        //You cannot mess with them before check if empty md5 will hash a space and null

        //Use prepared statements and the mysql_real_escape_string is not needed
        $username = mysql_real_escape_string();

        //I really am not sure that mysql_real_escape_string before your hash is a good idea...
        //You will be hashing the escaped version of it.
        $password = mysql_real_escape_string($_POST['password']);

        //This is not secure either check out.
        //http://php.net/manual/en/function.password-hash.php
        //http://php.net/manual/en/function.password-verify.php
        $password=md5($password);

        //http://php.net/manual/en/mysqli.quickstart.prepared-statements.php
        $sql="SELECT *FROM login WHERE username='$username' AND password='$password'";

        //You can drop the password from the query and check what is returned
        //In the results with using password_verify)
        $result=mysqli_query($db,$sql);

        //Check this upfront and do work if you meet it.
        //I assume that username is unique so you should
        //Want to do something if one is returned
        if(mysqli_num_rows($result) == 1){
            $row=mysqli_fetch_array($result);
            $_SESSION['role']=$row['role'];

            //For the page I would use a switch
            switch ($_SESSION['role']) {
                case "Admin":
                    //Capital L and a space
                    //Also it should be a url so example
                    header("Location: http://localhost/login/adminhome.php"); 
                    break;
                     case "Shopkeeper":
                    //Capital L and a space
                    //Also it should be a url so example
                    header("Location: http://localhost/login/historyshop.php"); 
                    break;
                case "Student":
                    //Capital L and a space
                    //Also it should be a url so example
                    header("Location: http://localhost/login/homepage.php"); 
                    break;
            }
        }else{
            $error='Customer_name/password combination incorrect';
        }
    }
}
?>