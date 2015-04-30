<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();

if(isset($_POST['submit'])){ //accessed content1 through login form
	if(empty($_POST['uName'])){
		echo '<h1>Content1.php</h1>';
		echo 'A username must be entered. Click <a href="login.php">here</a> to return to the login screen.';
		session_destroy();
	} else {
		$_SESSION['username'] = $_POST['uName'];
		$_SESSION['loggedIn'] = true;		
		if(!isset($_SESSION['visits'])){
			$_SESSION['visits'] = 0;
		}
		++$_SESSION['visits'];
		echo '<h1>Content1.php</h1>';
		echo "Hello $_SESSION[username], you have visited this page $_SESSION[visits] times.";	
		echo ' Click <a href="login.php?logout=true">here</a> to logout.';
		echo ' Click <a href="content2.php">here</a> to go to content2.php.';
	}	
} else{ //navigated to content1  directly
	if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){
		++$_SESSION['visits'];
		echo '<h1>Content1.php</h1>';
		echo "Hello $_SESSION[username], you have visited this page $_SESSION[visits] times.";	
		echo ' Click <a href="content2.php">here</a> to go to content2.php.';	
		echo ' Click <a href="login.php?logout=true">here</a> to logout.';
	}
	if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']==false){
		$_SESSION = array();
		session_destroy();
		header('Location: https://web.engr.oregonstate.edu/~watsokel/cs290a4/login.php');
	}
}
?>
