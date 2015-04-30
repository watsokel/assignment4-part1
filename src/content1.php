<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();


if(isset($_POST['submit']) && ($_SESSION['loggedIn']==false || !isset($_SESSION['loggedIn']))){
	$_SESSION['name'] = $_POST['username'];
	$_SESSION['loggedIn'] = true;
	if(empty($_SESSION['name'])){
		echo 'A username must be entered. Click <a href="login.php">here</a> to return to the login screen.';
		$_SESSION['loggedIn'] = false;
	} else {
		$_SESSION['loggedIn'] = true;		
		echo "Hello $_POST[username].";
		echo ' Click <a href="content2.php">here</a> to go to content2.php.';
		if(!isset($_SESSION['visits'])){
			$_SESSION['visits'] = 0;
		}
		++$_SESSION['visits'];
		echo "Hi $_SESSION[name], you have visited this page $_SESSION[visits] times.";	
	}	
}
else if(!isset($_POST['submit']) && ($_SESSION['loggedIn']==false || !isset($_SESSION['loggedIn']))){
	header('Location: https://web.engr.oregonstate.edu/~watsokel/cs290a4/login.php');
	die();
}


if($_SESSION['loggedIn']){
	++$_SESSION['visits'];
	echo "Hi $_SESSION[name], you have visited this page $_SESSION[visits] times.";	
}

//if($_POST['username'] !== $_SESSION['name']){
//	$_SESSION = array();
//	session_destroy();
//}

?>
