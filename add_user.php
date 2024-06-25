<?php
require_once 'db.php';
if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$designation = $_POST['designation'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	if($fname == ''  || $phone ==''  ){
		echo '<p class="addusererror">Fields marked with * are required</p>';
	}
	elseif(!preg_match("/^[a-zA-Z\s]+$/",$fname)){
		echo'<p class = "addusererror"> Name only contains alphabet </p>';
	}
	elseif(!preg_match("/^[9]\d{9} || [0]\d{8} $/",$_POST['phone'])){
			echo'<p class = "addusererror">Invalid Phone Number</p>';
		}
		
		elseif($phone == $_POST['phone']){
			$sql = mysqli_query($dbcon,"SELECT * from contactdetails where phone = '$phone'");
			$count = mysqli_num_rows($sql);
			if($count)
			{
				echo'<p class = "addusererror">Phone Number Already Exist</p>';
			}
		

	
	else {
		$sql = "INSERT INTO contactdetails(contact_name,designation	,phone,address) VALUES ('$fname','$designation','$phone', '$address')";
		$result= mysqli_query($dbcon,$sql);
		if($result){
	   echo '<p class="addsucces">Record added successfully</p><br> ';
   }
}  
   
}		
}

?>


<html>
<head>
<title>PHONE BOOK</title>
<link rel="stylesheet" href="stylecss.css">
</head>
<body>
	<br><br>
<?php  include_once 'menu-main.php';?></div>
  <form class="addusrbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete = "off">
  <h1> ADD USER</h1>
 <label>Name<span style="color:red;">*</span></label> <input type="text" placeholder = "Enter Name" name ="fname" ><br>
 <label>Designation</label> <input type="text" placeholder = "Enter a Status" name ="designation" ><br>
 <label>Phone<span style="color:red;">*</span></label> <input type="number" placeholder = "Enter Phone Number" name="phone" ><br>
 <label>Address</label> <input type="text" placeholder = "Enter Address" name="address" ><br>
 
 
  <input type="submit" value ="Add" name="submit">
  
  

  </form>

</body>
<style>
	body{
	background-image: url("adduser.png");
      background-repeat: no-repeat;
      background-position: right;
      background-size: 16cm;
      background-color: black; 
      }
	</style>

</html>