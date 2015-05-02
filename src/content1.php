<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();

if(isset($_POST['submit'])){ //accessed content1 through login form
	if(empty($_POST['username'])){
		echo '<h1>Content1.php</h1>';
		echo 'A username must be entered. Click <a href="login.php">here</a> to return to the login screen.';
		session_destroy();
	} else {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['loggedIn'] = true;		
		if(!isset($_SESSION['visits'])){
			$_SESSION['visits'] = 0;
		}
		++$_SESSION['visits'];
		echo '<h1>Content1.php</h1>';
		echo "Hello $_SESSION[username], you have visited this page $_SESSION[visits] times.";	
		echo '<p> Click <a href="content2.php">here</a> to go to content2.php.</p>';
		echo '<p> Click <a href="login.php?logout=true">here</a> to logout.</p>';
	}	
} else{ //navigated to content1  directly
	if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){
		++$_SESSION['visits'];
		echo '<h1>Content1.php</h1>';
		echo "Hello $_SESSION[username], you have visited this page $_SESSION[visits] times.";	
		echo '<p> Click <a href="content2.php">here</a> to go to content2.php.</p>';	
		echo '<p> Click <a href="login.php?logout=true">here</a> to logout.</p>';
	}
	if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']==false){
		$_SESSION = array();
		header('Location: https://web.engr.oregonstate.edu/~watsokel/cs290a4/login.php?redirected=true');
	}
}
?>
