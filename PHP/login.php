<?php 
	header('Content-type:text/html; charset=utf-8');
	session_start();
	if (isset($_POST['login'])) {
		$name = trim($_POST['username']);
		$pswd = trim($_POST['password']);
		if (($name == '') || ($pswd == '')) {
			header('refresh:5; url=login.html');
			echo "The user name or password cannot be empty, the system will jump to the login interface in 5 seconds, please fill in the login information again!";
			exit;
		} elseif (($name != 'root') || ($pswd != 'admin')) {
			header('refresh:5; url=login.html');
			echo "If the user name or password is wrong, the system will jump to the login interface in 5 seconds. Please fill in the login information again!";
			exit;
		} elseif (($name = 'root') && ($pswd = 'admin')) {
			$_SESSION['username'] = $name;
			$_SESSION['islogin'] = 1;
			header('location:index.php');
		}
	}
 ?>