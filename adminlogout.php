<?php
session_start();
if(isset($_SESSION['usernames'])){
	session_destroy();
	header('Location:ahome.php');
}
else{
	 header('Location:ahome.php');
	}

exit();
?>