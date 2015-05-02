<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();
if(isset($_SESSION['loggedIn'])){
	if($_SESSION['loggedIn']){ 
		if(isset($_GET['logout'])){
			$_GET = array();
			$_SESSION = array();
			session_destroy();
		}
		else{
			header('Location: content1.php');
		}
	}
}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>
	<body>
		<form action="content1.php" method="post">
		<input type="text" name="username" placeholder="Enter Username">
		<input type="submit" name="submit" value="Login">
		</form>
    <?php if(isset($_GET['redirected']) && $_GET['redirected'] == true) {
      echo '<p>You must log in to access content pages.</p>';
    }?>
	</body>
</html>
