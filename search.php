
<html>
<head>
<title>PHONE BOOK SYSTEM</title>
<link rel="stylesheet" href="stylecss.css">
</head>
<body>
  <br><br>
  <?php 
  include_once 'menu-main.php';
  ?><br><br><br>
  <div id = cont>
    <h1 class="prof"> RECORDS </h1></div><br><br><br><br><br>

  <div class="ss"></div>
 <form class="addusrbox1"  method="GET" autocomplete = "off">
  <h1> SEARCH RECORDS </h1>
<input type="text" name="search" value = "<?php if(isset($_GET['search'])){echo$_GET['search'];}?>">
<input type="submit"  name="submit">

  </form>

  <table class = "viewtabl">
    <thead>
     <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Designation</th>
      <th>Phone</th>
      <th>Address</th>
      
</tr>
</thead>
  
<tbody>
  
<?php

$con = mysqli_connect("localhost" ,"root","","phonebook");

if(isset($_GET['search']))
{
$str = $_GET['search'];
$query = "SELECT * FROM contactdetails WHERE CONCAT(contact_name,phone,designation,address) LIKE '%$str%' ";
$query_run = mysqli_query($con,$query);

if(mysqli_num_rows($query_run)>0)
{
foreach($query_run as $items)
{
  ?>
  <tr>
    <td><?=$items['contact_id'];?></td>
    <td><?=$items['contact_name'];?></td>
    <td><?=$items['designation'];?></td>
    <td><?=$items['phone'];?></td>
    <td><?=$items['address'];?></td>
    
</tr>
<?php
}

}
else
{
?>
<tr>
  <td colspan = "5">Contact does not exist</td>
</tr>


<?php
}
}
?>
</tbody>
</table>
</body>
<style>
	body{
	background-image: url("search.png");
      background-repeat: no-repeat;
      background-position: center;
      background-size: 40cm;
      background-color: black; 
      }
	</style>

  </html>