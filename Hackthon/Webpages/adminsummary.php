<!DOCTYPE html>
<html>
    <head>
        <link href="adminsummary.css" rel="stylesheet" type="text/css">
        <?php
include('session.php');
?>
    </head>
    <body>
        <div class="table">
            <div class="topnav">
  <a href="adminhome.php">Home</a>
  <a href="adminmoney.php">Finance</a>
  <a class="active" href="adminsummary.php">Summary</a>
</div>
            <h1 id="head">Actual expenditure per student :</h1>
<?php

$sql = "SELECT username, debit FROM login WHERE role='student'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Student</th><th>Debit</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["username"]. "</td><td>". $row["debit"];
    }echo "</table>";
} 
            else {
    echo "0 results";
}


?>
            <h1 id="head">User feedback :</h1>
            <?php

$sql = "SELECT feedback FROM complain";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Complains</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["feedback"];
    }echo "</table>";
} 
            else {
    echo "0 results";
}


?>
        </div>
    </body>
</html>