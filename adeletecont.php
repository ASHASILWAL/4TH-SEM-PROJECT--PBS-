<?php
require 'db.php';
$getid = $_GET['aadeleteid'];
$query = "DELETE FROM contactdetails WHERE contact_id = '$getid'";
$query_run = mysqli_query($dbcon,$query);
if($query_run){
	header('Location:aviewcontact.php');
}else{
	echo 'Error while deleting user record';
}

?>