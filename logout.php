<?php
session_start();
if(isset($_SESSION['username'])){
	session_destroy();
	header('Location:home.php');
}
// else{
	// header('Location:dashboard.php');
	// }

exit();
?>
