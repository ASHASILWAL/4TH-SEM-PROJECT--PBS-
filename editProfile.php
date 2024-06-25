<?php
ob_start(); 
  require_once 'db.php';
   // $getid = $_GET['editid'];
   // update
   if(isset($_POST['btnupdate'])){
	    $profileid = $_POST['contact_id'];
	   $fname = $_POST['fname'];
	   $username = $_POST['uname'];
	   $email = $_POST['uemail'];
	   
	   if(!preg_match("/^[a-zA-Z\s]+$/",$fname)){
      echo'<p class = "addusererror"> Name only contains alphabet </p>';
    }
    elseif(!preg_match("/^[a-zA-Z\s]+$/",$username)){
      echo'<p class = "addusererror"> Username only contains alphabet </p>';
    }
    else{
   $qu = "UPDATE userdetails SET name='$fname', username= '$username',email= '$email' 
   WHERE contact_id ='$profileid'";
    $run_query =@mysqli_query($dbcon,$qu);
	if($run_query){
		
    header("Location:viewProfile.php?update=profileupated"); 
   }else  {
	 echo '<p class="errorMsg">There was error while updating record</p>';  
   
	}	
}
   }
   $profileid = $_GET['editProfile']; // GETTING ID FROM URL
   $query = "SELECT * FROM userdetails WHERE contact_id ='$profileid' ";
    $result = @mysqli_query($dbcon,$query);
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
  <h1> UPDATE USER</h1>
  <input type="hidden" name ="contact_id" value= "<?php echo $drow['contact_id'];?>"><br>
 <label>FULLNAME</label> <input type="text" name ="fname" value= "<?php echo $drow['name'];?>"><br>
 <label>USERNAME</label> <input type="text" name ="uname" value="<?php echo $drow['username'];?>"><br>
 
	<label>EMAIL</label> <input type="email" name="uemail" value="<?php echo $drow['email'];?>"><br>
 
 
  <input type="submit" value ="EDIT" name="btnupdate">
  
  

  </form>
  </body>
  <style>
	body{
	background-image: url("editprofile.png");
      background-repeat: no-repeat;
      background-position: right;
      background-size: 16cm;
      background-color: black; 
      }
	</style>
  </html>
  