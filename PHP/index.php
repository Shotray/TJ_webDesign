<?php 
	header('Content-type:text/html; charset=utf-8');
	session_start();
 
	if (isset($_COOKIE['username'])) {
		$_SESSION['username'] = $_COOKIE['username'];
		$_SESSION['islogin'] = 1;
	}
	if (isset($_SESSION['islogin'])) {
		echo "Welcome! ".$_SESSION['username'].' ,Login successful<br>';
		echo "<a href='logout.php'>Logout</a>";
	} else {
		echo "You are not logged in yet, please <a href='login.html'>log in</a>";
	}
 ?>