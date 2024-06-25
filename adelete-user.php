<?php
require 'db.php';
$getid = $_GET['adeleteid'];
$query = "DELETE FROM userdetails WHERE contact_id = '$getid'";
$query_run = mysqli_query($dbcon,$query);
if($query_run){
	header('Location:aview-userprofile.php');
    
}else{
	echo 'Error while deleting user record';
}

?>