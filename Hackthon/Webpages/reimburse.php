<?php
include_once 'AdminActivitiesConnection.php';
if(isset($_POST['reimburse']))
   { 
         $Credit = $_POST['Credit'];
         $query = "update balance SET Balance='$Credit'";
	$query_run = mysqli_query($con,$query);
            
   if($query_run)
{
	echo '<script type="text/javascript">alert("Credit reimbursed successfully")</script>';
}
else{
echo '<script type="text/javascript">alert("Error")</script>';
							}
        
}
    
    
    
    ?>