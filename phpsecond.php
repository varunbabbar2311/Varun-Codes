<?php
$servername="localhost";
$username="username";
$password="password";
$conn= new mysqli($servername,$username,$password);
if(conn->connection_error)
	{
		die("connection error");
	}
else
	echo"connected successfully";
?>