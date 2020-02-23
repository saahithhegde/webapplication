<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "med_details";
$conn = mysqli_connect($host, $username, $password, $dbname);

?>

<html>
<head>
	<title>medicinetracker</title>
</head>
<form method="post" action="process.php">
	<input type="text" name="name" placeholder="enter name">
	<br>
	<input type="tel" name="phone" placeholder="enter number">
	<br>
	<input type="submit">
</form>

<table style="width:100%; text-align: center">
  <tr>
    <th>ID</th>
    <th>Name</th> 
    <th>Phone Number</th>
  </tr>
<?php
 $result = mysqli_query($conn, "SELECT * FROM basic_info");
 while ($row = mysqli_fetch_assoc($result))
 { 
 ?>
   <tr>
    <td><?php echo $row['ID'];?></td>
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['Phone'];?></td>
   </tr>

 <?php
 }
 ?>

</table>