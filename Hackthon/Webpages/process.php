<?php
include_once 'AdminActivitiesConnection.php';
if(isset($_POST['save']))
{	 
	 $Details = $_POST['Details'];
	 $Date = $_POST['Date'];
	 $sql = "INSERT INTO activities (Details,Date)
	 VALUES ('$Details','$Date')";
	 if (mysqli_query($con, $sql)) {
		echo '<script type="text/javascript">alert("New activity created!")</script>';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>