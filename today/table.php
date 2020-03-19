<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "med_details";

$conn = mysqli_connect($host, $username, $password, $dbname);
session_start();

?>
<style>
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
	</style>
<table>
	<tr>
		<th>ID</th>
		<th>name</th>
		<th>phone</th>
	</tr>
<?
$user=$_SESSION['user'];
// echo("<p>".$user."<p>");
 $result = mysqli_query($conn, "SELECT * FROM basic_info WHERE Name='".$user."'");
 while ($row = mysqli_fetch_assoc($result))
 { ?>
    <tr>
    	<td><?php echo($row['ID']); ?></td>
    	<td><?php echo($row['Name']); ?></td>
    	<td><?php echo($row['Phone']); ?></td>
    </tr>
 
 <?   
}
?>
 </table>