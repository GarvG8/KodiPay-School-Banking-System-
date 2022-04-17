<?php
include_once 'AdminActivitiesConnection.php';
if(isset($_POST['submit']))
{	 
	 $feed = $_POST['feed'];
	 $sql = "INSERT INTO complain (feedback)
	 VALUES ('$feed')";
	 if (mysqli_query($con, $sql)) {
		echo '<script type="text/javascript">alert("Your complain has been registered")</script>';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>