<?php
include 'connect.php';

$name=$_POST["name"];
$phone=$_POST["phone"];


$sql = "INSERT INTO basic_info (Name,Phone) VALUES ('$name','$phone')";

if ($conn->query($sql) === TRUE) 
{

	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('inserted sucessfully')
    window.location.href='dashboard.php';  
    </SCRIPT>");
}
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('not inserted sucessfully')
    window.location.href='dashboard.php';
    </SCRIPT>");

}


?>