<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "kodipay");
// SQL query to fetch information of registerd users and finds user match.
 $sql="SELECT *FROM login WHERE username='$username' AND password='$password'";

        //You can drop the password from the query and check what is returned
        //In the results with using password_verify)
$result=mysqli_query($conn,$sql);

        //Check this upfront and do work if you meet it.
        //I assume that username is unique so you should
        //Want to do something if one is returned
if(mysqli_num_rows($result) == 1){
$row=mysqli_fetch_array($result);
$_SESSION['role']=$row['role']; 
$_SESSION['login_user'] = $username; // Initializing Session
if ($row['role']=='Admin') {
  header("location: adminhome.php");
} elseif ($row['role']=='Student') {
  header("location: homepage.php");
} else {
  header("location: historyshop.php");
}
    
}
    else
    { echo'<script type="text/javascript">alert("Incorrect username or password")</script>';}
mysqli_close($conn); // Closing Connection
}
}
?>