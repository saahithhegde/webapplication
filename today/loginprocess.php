<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "testphp";
$conn = mysqli_connect($host, $username, $password, $dbname);


$name=$_POST["name"];
$password=$_POST["password"];
$email=$_POST["email"];

// echo $email;
// echo "<br>";
// echo $password;
// echo "<br>";

$result = mysqli_query($conn, "SELECT * FROM testtable");
while ($row = mysqli_fetch_assoc($result))
 {
 	// echo "<br>";
 	// echo $row['email'];
 	// echo "<br>";
 	// echo $row['password'];
 	// echo "<br>";
 
 	if($email==$row['email'] && $password==$row['password'])
 	{

 		session_start();
 		$_SESSION['user']=$name;

				 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('login')
    window.location.href='dashboard.php';
    </SCRIPT>");
 	}
 	
}
 
 ?>