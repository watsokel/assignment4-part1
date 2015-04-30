<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

echo '<html>';
	echo '<head>';
		echo '<meta charset="UTF-8">';
		echo '<title>' . 'Login' . '</title>';
	echo '</head>';
	echo '<body>';
		echo '<form action="content1.php" method="post">';
		echo '<input type="text" name="username" placeholder="Enter Username">';
		echo '<input type="submit" value="Login">';
		echo '</form>';
	echo '</body>';
echo '</html>';

?>
