<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="homepage.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="table">
            <div class="topnav">
  <a class="active" href="homepage.php">Home</a>
  <a href="historystudent.php">History</a>
  <a href="about.php">Contact</a>
<a href="logout.php">logout</a>
</div>
            <table>
                <tr>
                <td><h1>Your balance is <?php
$username=$_SESSION['login_user'];
$sql = "SELECT Balance FROM balance WHERE Name='$username'";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "". $row["Balance"]. "<br>";
    }
} else {
    echo "0 results";
}
 


?></h1></td>
                </tr>
            <tr>
                <td><a href="pay.php"> <img src="pay.png" class="img-fluid" alt="pay"></a></td></tr>
                <tr>
                <td><a href="pay.php" style="color:white">Pay!</a>
             </td></tr>
            </table>
        <?php

$sql = "SELECT Details, Date FROM activities";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Details</th><th>Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["Details"]. "</td><td>". $row["Date"];
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