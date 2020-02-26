<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "med_details";


$name=$_POST["name"];
$phone=$_POST["phone"];


$conn = mysqli_connect($host, $username, $password, $dbname);
$sql = "INSERT INTO basic_info (Name,Phone) VALUES ('$name','$phone')";

if ($conn->query($sql) == TRUE) 
{
	$value =  array('msg' => 'true' );
          echo json_encode($value);
}
else
{
	$value =  array('msg' => 'false' );
          echo json_encode($value);
}
?>