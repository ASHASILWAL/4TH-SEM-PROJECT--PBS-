<?php
session_start();

require 'db.php';
$query = "SELECT contact_id FROM contactdetails ";
    $result = mysqli_query($dbcon,$query);
	$row = @mysqli_num_rows($result);
	
?>
<html>
<head>
<title>PHONE BOOK SYSTEM </title>
<link rel="stylesheet" href="stylecss.css">
</head>
 <body>
<br><br>
  <?php 
  echo '<p class="loged">Logged in as <span>' .$_SESSION['username']. '</span></p>';
  include_once 'menu-main.php';
  ?> <br><br>
  
<div class= "addnew"><a href=""></a> </div> 
  <div class= "viewusers"><a href="view_user.php"></a> </div> 
  
  
</div>
</body>
<style>
	body{
	background-image: url("phone.png");
      background-repeat: no-repeat;
      background-position: right;
      background-size: 13.5cm;
      background-color: black; 
      }
	</style>
</html>
