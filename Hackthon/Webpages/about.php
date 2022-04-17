<!DOCTYPE html>
<html>
    <head>
        <link href="about.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="table">
            <div class="topnav">
  <a href="homepage.php">Home</a>
  <a href="historystudent.php">History</a>
  <a class="active" href="about.php">Contact</a>
    <a href="logout.php">logout</a>
</div>
            <h1> You can contact us with any problems you face : </h1>
<a href="https://www.instagram.com/"><img src="instagram.png" alt="instagram"></a>
            <h1> Or you can leave your feedback down here (Your feedback is completly anonymous):</h1>
            <form method="post" action="processfeedback.php">
            <textarea rows="6" cols="70" style="font-size: 150%" name="feed"></textarea>
                <br>
                <input type="submit" name="submit" value="submit" id="submit">
            </form>
        </div>
    </body>
</html>