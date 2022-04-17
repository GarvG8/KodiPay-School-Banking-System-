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
$sql = "SELECT * FROM balance WHERE Name='$username'";
$result = $conn->query($sql);
if(mysqli_num_rows($result) == 1){
$row=mysqli_fetch_array($result);
$balance=$row['Balance'];
}
$sql = "SELECT balance FROM shopkeeper";
$result = $conn->query($sql);
if(mysqli_num_rows($result) == 1){
$row=mysqli_fetch_array($result);
$shop=$row['balance'];
}
$sql = "SELECT debit FROM login WHERE username='$username'";
$result = $conn->query($sql);
if(mysqli_num_rows($result)){
$row=mysqli_fetch_array($result);
$used=$row['debit'];
}
$item = $_POST['item'];
$price = $_POST['price'];
$date = date('Y-m-d H:i:s');
$newbalance=(int)$balance-(int)$price;
$newshop=(int)$shop+(int)$price;
$newdebit=(int)$used+(int)$price;
if($balance>=$price){
$sql="INSERT INTO transaction(username,item,price,date)VALUES ('$username', '$item', '$price', '$date')";
$result = $conn->query($sql);
$query = "update balance SET Balance='$newbalance' WHERE Name='$username'";
$query_run = mysqli_query($conn,$query);
$query = "update shopkeeper SET balance='$newshop'";
$query_run = mysqli_query($conn,$query);
$query = "update login SET debit='$newdebit' WHERE username='$username'";
$query_run = mysqli_query($conn,$query);
echo'<script type="text/javascript">alert("Payment Complete")</script>';
}else{
echo'<script type="text/javascript">alert("Insuffieceint funds")</script>';
}}
$conn->close();
?>