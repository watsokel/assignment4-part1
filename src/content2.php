<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){
	echo '<h1>Content2.php</h1>';
	echo ' Click <a href="content1.php">here</a> to go to content1.php.';	
}
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']==false){
	$_SESSION = array();
	header('Location: https://web.engr.oregonstate.edu/~watsokel/cs290a4/login.php?redirected=true');
}
?>