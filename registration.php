<?php
require_once 'db.php';
if(isset($_POST['submit'])){
	$name1 = $_POST['fname'];
	$username = $_POST['usrname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword =$_POST['cpassword'];
	if($name1 == '' || $username == ''  || $password == '' || $cpassword ==''){
		echo '<p class="errorMsg">Fields marked with * are required</p>';
	}
	  elseif(!preg_match("/^[a-zA-Z\s]+$/",$name1)){
		echo'<p class = "addusererror"> Name only contains alphabet </p>';
	}
	elseif(!preg_match("/^[a-zA-Z\s]+$/",$username)){
		echo'<p class = "addusererror"> Username only contains alphabet </p>';
	}
	
	else if( $password != $cpassword){
		echo '<p class="errorMsg" style= "text-align: center;">Passwords do not match..</p>';
	}else{
		$sql = mysqli_query($dbcon,"SELECT * FROM userdetails WHERE username = '$username' || email = '$email' ");
        $count = mysqli_num_rows($sql);
       //	if(mysqli_num_rows($sql)==1)
	   if($count)
		{
			echo '<p class= "regsucces">username or email already exists</p>';
	
		} else{
			$sql = "INSERT INTO userdetails(name, username, email, password) VALUES ('$name1','$username','$email', '$password')";
			$result= mysqli_query($dbcon,$sql);
			if($result){
				echo '<p class="regsucces">Record added successfully</p>';
		}else  {
				echo '<p class="errorMsg">There was error while adding record</p>';  
			}
		}
	}
}
?>
<html>
<head>
<title>PHONE BOOK SYSTEM</title>
<link rel="stylesheet" href="stylecss.css">
</head>
<body>
<div id = "main">
    <h1> PHONE BOOK SYSTEM </h1></div>

	<br><br>

  <?php 
  //include_once 'menu-main.php';
  ?><br><br>

  <form class="registbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete = "off">
   <?php 
   ?>
  <h1> REGISTRATION</h1>
 <label>FULLNAME<span style="color:red;">*</span></label> <input type="text" name ="fname" placeholder ="Enter Your Name" class="labelname"><br>
 <label>USERNAME<span style="color:red;">*</span></label> <input type="text" name ="usrname" placeholder ="Enter Username" class="labelname"><br>
 <label>EMAIL</label> <input type="email" name="email" placeholder ="Enter Email Address" class="labelname"><br>
 <label>PASSWORD<span style="color:red;">*</span></label> <input type="password" name="password" placeholder = "**********" class="labelname"><br>
 <label>CONFIRM PASSWORD<span style="color:red;">*</span></label> <input type="password" name="cpassword" placeholder = "**********" class="labelname"><br>
 
  <input type="submit" value ="REGISTER" name="submit">
  <p class="acount"> Already have an account? please login <a href="home.php" id="reg"> HERE </a>
  

  </form>

</body>
<style>
	body{
	background-image: url("registration.png");
      background-repeat: no-repeat;
      background-position: center;
      background-size: 37cm;
      background-color: black; 
      }
	</style>

</html>