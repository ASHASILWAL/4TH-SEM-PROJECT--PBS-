<?php
 ob_start();
  require_once 'db.php';
   // $getid = $_GET['editid'];
   // update
   if(isset($_POST['update1'])){
	    $getid = $_POST['contact_id'];
	   $fname = $_POST['fname'];
	   $designation = $_POST['designation'];
	   $phone = $_POST['phone'];
	   $address = $_POST['address'];
     if(!preg_match("/^[a-zA-Z\s]+$/",$fname)){
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
    
    }
else{
    
   $qu = ("UPDATE contactdetails SET contact_name='$fname', designation= '$designation',phone= '$phone',address='$address' 
   WHERE contact_id ='$getid'");
    $run_query =@mysqli_query($dbcon,$qu);
	if($run_query){
	header("Location:view_user.php");	
  
   }else  {
	 echo '<p class="errorMsg">There was error while updating record</p>';  
   
	}
}
  }
   $getid = $_GET['editid']; // GETTING ID FROM URL
   $query = "SELECT * FROM contactdetails WHERE contact_id ='$getid' ";
    $result = mysqli_query($dbcon,$query);
	 $drow = @mysqli_fetch_assoc($result);
?>
  <html>
<head>
<title>PHONE BOOK SYSTEM </title>
<link rel="stylesheet" href="stylecss.css">
</head>
<body>
  <br><br>
 
 <?php  include_once 'menu-main.php';?><br><br>
 <form class="addusrbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete = "off">
  <h1> UPDATE RECORDS </h1>
 
  <input type="hidden" name ="contact_id" value= "<?php echo isset($drow['contact_id']) ? $drow['contact_id'] : '';?>"><br>
 <label>FULLNAME</label> <input type="text" name ="fname" value= "<?php echo isset($drow['contact_name']) ? $drow['contact_name'] : '';?>"><br>
 <label>DESIGNATION</label> <input type="text" name ="designation" value="<?php echo isset($drow['designation']) ? $drow['designation'] : '';?>"><br>
 <label>PHONE</label> <input type="number" name="phone" value="<?php echo isset($drow['phone']) ? $drow['phone'] : '';?>"><br>
	<label>ADDRESS</label> <input type="text" name="address" value="<?php echo isset($drow['address']) ? $drow['address'] : '';?>"><br>
 
 
  <input type="submit" value ="UPDATE" name="update1">
  
  

  </form>
  
  </body>
  <style>
	body{
	background-image: url("edit.png");
      background-repeat: no-repeat;
      background-position: right;
      background-size: 16cm;
      background-color: black; 
      }
	</style>
  </html>
  