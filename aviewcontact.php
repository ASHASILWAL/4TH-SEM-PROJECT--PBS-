<?php
session_start();
//echo $_SESSION['username'];
?>
<html>
<head>
<title>PHONE BOOK SYSTEM</title>
<link rel="stylesheet" href="style.css">
<script>
   function ConfirmDelete() {
  return confirm("Do you want to delete?");
}

</script>
</head>
<body>
<br><br>
  <?php include_once 'amenu.php';?><br><br><br>
  <div id = cont>
  <h1 class="prof"> VIEW RECORDS </h1></div><br><br><br><br>

   <table class=" viewtabl" >
  
  <tr>
  <td> <strong>S.NO</strong></td>
  <td><strong>NAME</strong></td>
  <td><strong>DESIGNATION</strong></td>
  <td><strong>PHONE</strong></td>
  <td><strong>ADDRESS</strong></td>
  <td><strong>PERFORMANCE</strong></td>
  </tr>
  
  <?php  //https://www.formget.com/update-data-in-database-using-php/  to display table in echo https://stackoverflow.com/questions/35944425/displaying-a-user-profile-page-php
   require_once 'db.php';
   $count= 1;
   $query = "SELECT * FROM contactdetails ORDER BY contact_name" ;
    $result = mysqli_query($dbcon,$query);
	 while($row = @mysqli_fetch_assoc($result)){?>
  
  
  <tr>
  <td id="od"> <?php echo $count;?></td>
  <td class="ev"> <?php echo $row["contact_name"];?></td>
  <td class="od"><?php echo $row["designation"];?></td>
  <td class="ev"><?php echo $row["phone"];?></td>
  <td class="od"><?php echo $row["address"];?></td>
  <td class="ev">
  <a href="aaedit.php?aaeditid=<?php echo $row["contact_id"]; ?>"id="edt" >EDIT</a>
  <a href="adeletecont.php?aadeleteid=<?php echo $row["contact_id"]; ?> "id="del" Onclick="return ConfirmDelete()">DELETE</a>
 

  </td>
  </tr>
 <?php $count++;}?>
 
	 </table>
   
	   
</div>
</body>
<style>
	body{
	background-image: url("aviewcont.png");
      background-repeat: no-repeat;
      background-position: center;
      background-size: 35.8cm;
      background-color: black; 
      }
	</style>


</html>

