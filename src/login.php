<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();
if(session_status()==PHP_SESSION_ACTIVE){ 
	if(isset($_GET['logout'])){
		$_GET = array();
		$_SESSION = array();
		session_destroy();
	}
//	else{	
//		header('Location: https://web.engr.oregonstate.edu/~watsokel/cs290a4/content1.php');
//	}	
}

	echo '<html>';
	echo '<head>';
		echo '<meta charset="UTF-8">';
		echo '<title>' . 'Login' . '</title>';
	echo '</head>';
	echo '<body>';
		echo '<form action="content1.php" method="post">';
		echo '<input type="text" name="uName" placeholder="Enter Username">';
		echo '<input type="submit" name="submit" value="Login">';
		echo '</form>';
	echo '</body>';
echo '</html>';

?>
