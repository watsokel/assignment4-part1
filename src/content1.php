<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

echo 'test<br>';

$userName = $_POST['username'];

var_dump($_POST);
if(empty($userName)){
	echo 'A username must be entered. Click <a href="login.php">here</a> to return to the login screen.';
} else {
	echo "Hello $userName, ";
}
?>
