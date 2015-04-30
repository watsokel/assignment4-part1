<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
echo '{"Type":"[';
if($_SERVER['REQUEST_METHOD'] === 'GET'){
	echo 'GET]"';
}
else if($_SERVER['REQUEST_METHOD'] === 'POST'){
	echo 'POST]"';
}
echo ',"parameters":';
echo json_encode($_GET);
echo '}';
?>
