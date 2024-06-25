<?php
require_once 'db.php';
$query = "SELECT contact_id FROM contactdetails ";
    $result = mysqli_query($dbcon,$query);
	$row = @mysqli_num_rows($result);
?>

<html>
<head>
<title>PHONE BOOK SYSTEM </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id = "main">
    <h1> PHONE BOOK SYSTEM </h1>
</div><br><br>
<div class="menu">  
   <ul>
   
      <li><a href="adashboard.php">HOME</a></li>
      <li><a href="aview-userprofile.php">VIEW USER PROFILE</a></li>
     
      <li><a href="#">VIEW RECORDS</a>
      <ul>
            <li><a href="aviewcontact.php">View Contacts</a></li>
            <li><a href="asearch.php">Search Contacts</a></li>
         </ul>
      <li><a href="#">ADMIN PROFILE</a>
         <ul>
            <li><a href="adminprofile.php">Admin Profile</a></li>
            <li><a href="achangepassword.php">Change Password</a></li>
            <li><a href="adminlogout.php">Admin Logout</a></li>
         </ul>
      </li>
      <li><a href="atotal.php">TOTAL</a></li>
   
   </ul>
</div>

</body>

<style>
	body{
	background-image: url("adash.png");
      background-repeat: no-repeat;
      background-position: right;
      background-size: 13.5cm;
      background-color: black; 
      }
	</style>


</html> 