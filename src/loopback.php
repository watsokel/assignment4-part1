<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
header('Content-Type: application/json');
echo '{"Type":"[';
if($_SERVER['REQUEST_METHOD'] === 'GET'){
	echo 'GET]"';
  echo ',"parameters":';
  echo json_encode($_GET);
  echo '}';
}
else if($_SERVER['REQUEST_METHOD'] === 'POST'){
	echo 'POST]"';
  echo ',"parameters":';
  echo json_encode($_POST);
  echo '}';
}
else{
  echo 'Invalid request.';
}
?>
