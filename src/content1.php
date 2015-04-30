<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

echo 'test<br>';

var_dump($_POST);
if(!(isset($_POST['username']) || $_POST['username']==NULL)){
	echo 'A username must be entered.';
}
?>
