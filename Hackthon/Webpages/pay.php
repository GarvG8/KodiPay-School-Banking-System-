<!DOCTYPE html>
<html>
    <head>
        <link href="pay.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="table">
            <div class="topnav">
  <a href="homepage.php">Home</a>
  <a href="historystudent.php">History</a>
  <a href="about.php">About</a>
<a href="logout.php">logout</a>
</div>

            <form method="post" action="transaction2.php">
                <h1 id="head">Activity List:</h1>
                <p id="p1">Name of the product :</p>
            <input type="text" name="item" id="name">
                <br>
                <p id="p1">Price :</p>
            <input type="number" name="price" id="price">
                <br>
                 <br>
                <input id="p1" type="submit" name="payment" value="pay">
            
            </form>
        </div>
    </body>
</html>