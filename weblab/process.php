<?php


$host = "localhost";

$username = "root";

$password = "";

$dbname = "med_details";

$name=$_POST["name"];
$phone=$_POST["phone"];

$conn = mysqli_connect($host, $username, $password, $dbname);

$sql = "INSERT INTO basic_info (Name,Phone) VALUES ('$name','$phone')";

if ($conn->query($sql) === TRUE) 
{

	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('inserted sucessfully')
    window.location.href='basicinfo.php';
    </SCRIPT>");
}
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('not inserted sucessfully')
    window.location.href='basicinfo.php';
    </SCRIPT>");

}


?>