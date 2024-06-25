<?php
session_start();
//echo $_SESSION['username'];
//echo $_SESSION['contact_id'];

?>
<html>
<head>
<title>PHONE BOOK SYSTEM</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<br><br>
  
  <?php  include_once 'amenu.php';?>
  <br><br><br>
  <div id = home>
    <h1 class="prof"> ADMIN PROFILE</h1></div><br><br><br><br><br>
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
   
   $query = "SELECT * FROM admindetails where usernames = '".$_SESSION['usernames']."'";
    $result = mysqli_query($dbcon,$query);
	 $row = @mysqli_fetch_assoc($result)
  // echo($result);
  // die();
  ?>
  <tr>
  
  <td> <?php echo $row["name"];?></td>
  <td><?php echo $row["usernames"];?></td>
  <td><?php echo $row["email"];?></td>
  
  <td>
  
 <a href="adminedit.php?editaProfile=<?php echo $row["contact_id"]; ?> "id="edt">EDIT</a>
  </td>
  </tr>

	 </table>
	   </div>
</body>
<style>
	body{
	background-image: url("adminprofile.png");
      background-repeat: no-repeat;
      background-position: right;
      background-size: 16.8cm;
      background-color: black; 
      }
	</style>
</html>
