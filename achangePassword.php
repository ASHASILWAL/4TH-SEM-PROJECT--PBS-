<?php
//https://www.sitepoint.com/community/t/using-session-variables-to-keep-user-logged-in-if-they-havent-logged-out/294407
ob_start();
session_start();
include 'db.php';
if(isset($_POST['passchange'])){
	$oldpass = $_POST['oldpass'];
	 $newpass = $_POST['newpass'];
	 $cnewpass = $_POST['cnewpass'];
	
	if($oldpass =='' || $newpass == ''|| $cnewpass==''){
	echo '<p class="cpass">All the fields are required</p>'; 
	}else{
		$sql =mysqli_query($dbcon, "SELECT * FROM admindetails where contact_id= '".$_SESSION['contact_id']."'");

        if(mysqli_num_rows($sql) == 1) {
	 $member = mysqli_fetch_assoc($sql);
		
	 if($member['password']!=$oldpass){
		echo '<p class="cpass">your old password is invalid</p>';
	 } 
	 else
		if($newpass!= $cnewpass){
		echo '<p class="cpass">Your passwords do not match</p>';
	}else {
		$query = mysqli_query($dbcon,"update admindetails set password='$newpass' where contact_id= '".$_SESSION['contact_id']."'");
		if($query){
			echo '<p class="cpasssuc">Password updated</p>';
		}else{
			echo 'error';
		}
	}
		
}// end num rowns

	
	}// end empty fields
	}

?>
<html>
<head>
<title>PHONE BOOK SYSTEM</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<br>
 <br>
 <?php  include_once 'amenu.php';?><br><br>
  

  <form class="passbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete = "off">
  <h1> CHANGE PASSWORD</h1>
  <table width="100%">
	  <tr>
		  <td><label>Old Password<span style="color:red">*</span></label> </td>
		  <td><input type="password" placeholder = "Enter Previous Password" name ="oldpass" ></td>
	  </tr>
	  <tr>
		  <td><label>New Password<span style="color:red">*</span></label></td>
		  <td><input type="password" placeholder = "Enter New Password" name="newpass" ></td>
	  </tr>
	  <tr>
		  <td><label>Confirm New Password<span style="color:red">*</span></label></td>
		  <td><input type="password" placeholder = "Confirm Your Password" name="cnewpass" ></td>
	  </tr>
	  <tr>
		  <td colspan="2"><input type="submit" value ="CHANGE" name="passchange"></td>
	  </tr>
  </table>
   
<br>
 
  
  

  </form>

</body>
<style>
	body{
	background-image: url("achangepass.png");
      background-repeat: no-repeat;
      background-position: center;
      background-size: 35.8cm;
      background-color: black; 
      }
	</style>
	
	</html>