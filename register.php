<?php
	require 'conn.php';
	
	if(ISSET($_POST['register'])){
		$bookname = $_POST['bookname'];
		$bookid = $_POST['bookid'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		mysqli_query($conn, "INSERT INTO `user` VALUES('', '$bookname', '$bookid', '$username', '$password')") or die(mysqli_error());
		echo "<h3 class='text-success'>User account registered!</h3>";
	}
?>