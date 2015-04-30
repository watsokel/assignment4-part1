<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();


if(isset($_POST['submit'])){
	$_SESSION['user'] = $_POST['username'];
	if(empty($_POST['username'])){
		echo 'A username must be entered. Click <a href="login.php">here</a> to return to the login screen.';
		$_SESSION['loggedIn'] = false;
	} //else{
//		$_SESSION['loggedIn'] = true;		
//		echo "Hello $_POST['userName']. ";
//		echo 'Click <a href="content2.php">here</a> to go to content2.php.';
//		if(!isset($_SESSION['visits'])){
//			$_SESSION['visits'] = 0;
//		}
//		++$_SESSIONS['visits'];
//		echo "Hi $_SESSION[user], you have visited this page $_SESSION['visits'] times."	
//	}	
}
else if(!isset($_POST['submit'])){
	header('Location: https://web.engr.oregonstate.edu/~watsokel/cs290a4/login.php');
	die();
}
?>
