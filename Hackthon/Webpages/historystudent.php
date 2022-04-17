<!DOCTYPE html>
<html>
    <head>
        <link href="historystudent.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="table">
            <div class="topnav">

  <a href="homepage.php">Home</a>
  <a class="active" href="historystudent.php">History</a>
  <a href="about.php">Contact</a>
<a href="logout.php">logout</a>
</div>
            <br>
            <br>
            <br>
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

$sql = "SELECT username, item, price, date FROM transaction WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Item</th><th>Price</th><th></th><th>Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["username"]. "</td><td>". $row["item"]. "</td><td>" . $row["price"]. "<td/><td>" . $row["date"]. "</td></tr>";
    }echo "</table>";
} 
            else {
    echo "0 results";
}

$conn->close();
?>
        </div>
    </body>
</html>