<!DOCTYPE html>
<html>
    <head>
        <link href="adminhome.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="table">
            <div class="topnav">
  <a class="active" href="adminhome.php">Home</a>
  <a href="adminmoney.PHP">Finance</a>
  <a href="adminsummary.php">Summary</a>
</div>
<form method="post" action="process.php">
<p id="head">Add activity:</p><br><p id="p1">Details of the activity:</p><textarea rows="4" cols="50" style="font-size: 150%" name="Details" required></textarea>
    <br>
    <br>
     <p id="p1">Date of activity:</p><br><input type="date" name="Date" id="date" required><br><br><br>
    <input id="p1" type="submit" name="save" value="submit">
            </form>
        </div>
    </body>
</html>