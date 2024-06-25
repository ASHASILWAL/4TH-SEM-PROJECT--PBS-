
<html>
<head>
<title>PHONE BOOK SYSTEM</title>
<link rel="stylesheet" href="stylecss.css">
</head>
<body>
<div id = "main">
    <h1> PHONE BOOK SYSTEM </h1>
</div><br><br><br><br>

<?php  include_once 'menu-main.php';?><br><br>

<div class=" totalcontact"> <p>Total number of contacts<br> <?php echo '<span>'. $row.'</span>';?></p></div>

</body>
<style>
	body{
	background-image: url("total.png");
      background-repeat: no-repeat;
      background-position: right;
      background-size: 17.5cm;
      background-color: black; 
      }
	</style>

</html>
