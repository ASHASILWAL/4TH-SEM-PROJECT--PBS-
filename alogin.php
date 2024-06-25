<?php
//https://www.sitepoint.com/community/t/using-session-variables-to-keep-user-logged-in-if-they-havent-logged-out/294407
ob_start();
session_start();
include 'db.php';
if(isset($_POST['submit'])){
	$username = $_POST['username1'];
	$password = $_POST['password'];
	if($username =='' || $password == ''){
	echo '<p class="errorMsg">All the fields are required</p>'; 
	}
	
	else{
		$sql = mysqli_query($dbcon,"SELECT * FROM admindetails WHERE usernames = '$username' AND password = '$password'");

        if(mysqli_num_rows($sql) == 1) {
	 $member = mysqli_fetch_assoc($sql);
		
			$_SESSION['usernames'] = $username;
			$_SESSION['contact_id'] = $member['contact_id'];
			
			header('Location:adashboard.php?d=adashboard'); 
		
}else{
	echo '<p class="loginerror">Invalid username or password</p>';
}
	
	}
	}

?>
<html>
<head>
	
<title>PHONE BOOK SYSTEM</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div id = "main">
    <h1> PHONE BOOK SYSTEM </h1></div>

	<br><br>
<?php //include_once 'menu-main.php';?><br><br>
  <form class="loginbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete = "off">
  <h1> SIGN IN</h1>
   
 USERNAME<span style="color:red;">*</span><input type="text" placeholder = "Admin" name ="username1" ><br>
 PASSWORD<span style="color:red;">*</span><input type="password" placeholder = "**********" name="password" ><br>
  <input type="submit" value ="SUBMIT" name="submit">
  <p> Not a member yet? Register <a href="aregistration.php" id="reg"> HERE </a>

  </form>

</body>
<style>
	body{
	background-image: url("ahome.png");
      background-repeat: no-repeat;
      background-position: right;
      background-size: 25.5cm;
      background-color: black; 
      }
	</style>

</html>