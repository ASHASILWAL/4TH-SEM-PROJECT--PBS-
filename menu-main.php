<?php
require_once 'db.php';
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
<div id = "main">
    <h1> PHONE BOOK SYSTEM </h1>
</div><br><br>
<div class="menu">  
   <ul>
   
      <li><a href="dashboard.php">HOME</a></li>
      <li><a href="add_user.php"> ADD NEW </a>
      <li><a href="#">VIEW ALL</a>
      <ul>
            <li><a href="view_user.php">View Contacts</a></li>
            <li><a href="search.php">Search Contacts</a></li>
         </ul>
      <li><a href="#">PROFILE</a>
         <ul>
            <li><a href="viewProfile.php">View Profile</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </li>
      <li><a href="contact.php">CONTACT US</a></li>
      <li><a href="total.php">TOTAL<?php //echo '<p class= "count">'.$row.'</p>';?></a></li>
   
   </ul>
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