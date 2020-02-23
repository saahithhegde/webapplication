<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "testphp";
$conn = mysqli_connect($host, $username, $password, $dbname);

$name=$_POST["name"];
$cpassword=$_POST["cpassword"];
$password=$_POST["password"];
$email=$_POST["email"];


if($cpassword==$password)
{

	$sql = "INSERT INTO `testtable` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password');";
	if ($conn->query($sql) == TRUE) 
{

	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('inserted sucessfully')
    window.location.href='login.php';
    </SCRIPT>");
}
else
{
	echo("error");
}
}
else  {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('try again')
    window.location.href='signup.php';
    </SCRIPT>");
}
 ?>