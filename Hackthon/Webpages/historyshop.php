<!DOCTYPE html>
<html>
    <head>
        <link href="historyshop.css" rel="stylesheet" type="text/css">
        <?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "kodipay";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>
    </head>
    <body>
        <div class="table">
            <div class="topnav">

  <a class="active" href="historyshop.php">Payment History</a>

</div>
            <h1><?php $sql = "SELECT balance FROM shopkeeper";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Your balance is ". $row["balance"]. "<br>";
    }
} else {
    echo "0 results";
}?></h1>
            <br>
            <br>
            <br>
            
<?php
$sql = "SELECT username, item, price, date FROM transaction";
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
<!--  <form method="post" action="delete.php">
<input type="submit" name="delete" value="Delete all records">
    </form>-->
        </div>
    </body>
</html>