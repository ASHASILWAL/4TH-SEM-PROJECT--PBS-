<?php
session_start();
//echo $_SESSION['username'];
//echo $_SESSION['contact_id'];

?>
<html>
<head>
<title>PHONE BOOK SYSTEM</title>
<link rel="stylesheet" href="style.css">
<script>
   function ConfirmDelete(){
  return confirm("Do you want to delete?");
}
</script>

</head>
<body>
<br><br>
  
  <?php  include_once 'amenu.php';?>
  <br><br><br>
  <div id = home>
    <h1 class="prof"> USER PROFILE</h1></div><br><br><br><br><br>
   <table class=" viewtable" >
  
  <tr>
  <td><strong>S.NO.</strong></td>
  <td><strong>NAME</strong></td>
  <td><strong>USERNAME</strong></td>
  <td><strong>EMAIL</strong></td>
  <td><strong>ACTION</strong></td>
  </tr>
  
  <?php  //https://www.formget.com/update-data-in-database-using-php/  to display table in echo https://stackoverflow.com/questions/35944425/displaying-a-user-profile-page-php
   require_once 'db.php';
   $count= 1;
   $query = "SELECT * FROM userdetails ORDER BY name" ;
    $result = mysqli_query($dbcon,$query);
	 while($row = @mysqli_fetch_assoc($result)){?>
  
  <tr>
  <td id="od"> <?php echo $count;?></td>
  <td class="ev"><?php echo $row["name"];?></td>
  <td class="od"><?php echo $row["username"];?></td>
  <td class="ev"><?php echo $row["email"];?></td>
  <td class ="od">
  <a href="adelete-user.php?adeleteid=<?php echo $row["contact_id"]; ?>" Onclick="return ConfirmDelete()">DELETE</a>

  </td>
  </tr>
 <?php $count++;}?>



	 </table>
	   </div>
</body>
<style>
	body{
	background-image: url("aview-userprofile.png");
      background-repeat: no-repeat;
      background-position: right;
      background-size: 16.5cm;
      background-color: black; 
      }
	</style>
</html>
