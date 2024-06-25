<?php
session_start();

require 'db.php';
$query = "SELECT contact_id FROM admindetails ";
    $result = mysqli_query($dbcon,$query);
	$row = @mysqli_num_rows($result);
	
?>
<html>
<head>
<title>PHONE BOOK SYSTEM </title>
<link rel="stylesheet" href="style.css">
</head>
 <body>
<br><br>
  <?php 
  echo '<p class="loged">Logged in as <span>' .$_SESSION['usernames']. '</span></p>';
  include_once 'amenu.php';
  ?> <br><br>
  
<div class= "addnew"><a href=""></a> </div> 
  <div class= "viewusers"><a href="view_user.php"></a> </div> 
  
  
</div>
</body>
<style>
	body{
	background-image: url("adash.png");
      background-repeat: no-repeat;
      background-position: right;
      background-size: 16cm;
      background-color: black; 
      }
	</style>
</html>
