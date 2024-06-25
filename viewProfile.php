<?php
session_start();
//echo $_SESSION['username'];
//echo $_SESSION['contact_id'];

?>
<html>
<head>
<title>PHONE BOOK SYSTEM</title>
<link rel="stylesheet" href="stylecss.css">
</head>
<body>
<br><br>
  
  <?php  include_once 'menu-main.php';?>
  <br><br><br>
  <div id = home>
    <h1 class="prof"> USER PROFILE</h1></div><br><br><br><br><br>
   <table class=" viewtable" >
  
  <tr>
  
  <td><strong>NAME</strong></td>
  <td><strong>USERNAME</strong></td>
  <td><strong>EMAIL</strong></td>
  <td><strong>ACTION</strong></td>
  </tr>
  
  <?php  //https://www.formget.com/update-data-in-database-using-php/  to display table in echo 
  //echo $_SESSION['contact_id'];
   require_once 'db.php';
   
   $query = "SELECT * FROM userdetails where username = '".$_SESSION['username']."'";
    $result = mysqli_query($dbcon,$query);
	 $row = @mysqli_fetch_assoc($result)?>
  
  
  <tr>
  
  <td> <?php echo $row["name"];?></td>
  <td><?php echo $row["username"];?></td>
  <td><?php echo $row["email"];?></td>
  
  <td>
  
 <a href="editProfile.php?editProfile=<?php echo $row["contact_id"]; ?> "id="edt">EDIT</a>
  </td>
  </tr>

	 </table>
	   </div>
</body>
<style>
	body{
	background-image: url("viewprofile.png");
      background-repeat: no-repeat;
      background-position: right;
      background-size: 16.5cm;
      background-color: black; 
      }
	</style>
</html>
