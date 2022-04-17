<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kodipay";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$username=$_SESSION['login_user'];
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['payment']))
{
$item = $_POST['item'];
$price = $_POST['price'];
if(
$sql="INSERT INTO transaction(username,item,price,date)VALUES ('$username', '$item', $price, '2021-01-18')");
if ($conn->query($sql) === TRUE){
echo "New record created successfully";
}else{
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>