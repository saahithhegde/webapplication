<?php
	session_start();
	session_destroy();
	 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('logged out');
    window.location.href='login.php';
    </SCRIPT>");
 ?>