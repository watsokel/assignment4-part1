<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

echo "<h1>Multiplication Table</h1>";
echo '<p>Programmed by Kelvin Watson</p>';

$eC = $eP = $iMinC = $iMaxC = $iMinP = $iMaxP = $sMinC = $sMaxC = $sMinP = $sMaxP = false;

if($_GET['min-multiplicand'] > $_GET['max-multiplicand']){
	echo 'Minimum multiplicand larger than maximum multiplicand.<br>';
	$eC = false;
} else{
	$eC = true;
}

if($_GET['min-multiplier'] > $_GET['max-multiplier']){
	echo 'Minimum multiplier larger than maximum multiplier.<br>';
	$eP = false;
} else {
	$eP = true;
}	

if(!is_numeric($_GET['min-multiplicand'])){
	echo 'Minimum multiplicand must be an integer.<br>';
	$iMinC = false;
} else {
	$iMinC = true;
}

if(!is_numeric($_GET['max-multiplicand'])){
	echo 'Maximum multiplicand must be an integer.<br>';
	$iMaxC = false;
}else{
	$iMaxC = true;
}

if(!is_numeric($_GET['min-multiplier'])){
	echo 'Minimum multiplier must be an integer.<br>';
	$iMinP = false;
} else{
	$iMinP = true;
}

if(!is_numeric($_GET['max-multiplier'])){
	echo 'Maximum multiplier must be an integer.<br>';
	$iMaxP = false;
} else {
	$iMaxP = true;
}

if(!isset($_GET['min-multiplicand'])){
	echo 'Missing parameter min-multiplicand.<br>';
	$sMinC = false;
} else {
	$sMinC = true;
}

if(!isset($_GET['max-multiplicand'])){
	echo 'Missing parameter max-multiplicand.<br>';
	$sMaxC = false;
}else{
	$sMaxC = true;
}

if(!isset($_GET['min-multiplier'])){
	echo 'Missing parameter min-multiplier.<br>';
	$sMinP = false;
}else {
	$sMinP = true;
}

if(!isset($_GET['max-multiplier'])){
	echo 'Missing parameter max-multiplier.<br>';
	$sMaxP = false;
} else {
	$sMaxP = true;
}

if($eC && $eP && $iMinC && $iMaxC && $iMinP && $iMaxP && $sMinC && $sMaxC && $sMinP && $sMaxP){
	$minC = (int)$_GET['min-multiplicand'];
	$maxC = (int)$_GET['max-multiplicand'];
	$minP = (int)$_GET['min-multiplier'];
	$maxP = (int)$_GET['max-multiplier'];
	
	echo "<p>min-multiplicand = $minC
				<br>max-multiplicand = $maxC
				<br>min-multiplier = $minP
				<br>max-multiplier = $maxP</p>";

	echo '<table border="1">';

	echo '<tr>';
	echo '<th>';
	echo '</th>';
		for($hr = $minP; $hr < ($maxP+1); $hr++){
			echo "<th>$hr</th>";
		}
	echo '</tr>';

	for($r = $minC ; $r < ($maxC+1) ; $r++){
		echo '<tr>';
		echo '<th>';
		echo $r;
		echo '</th>';
		for($c = $minP; $c < ($maxP+1); $c++){
			echo '<td>';
			echo $r * $c;
			echo '</td>';
		}
		echo'</tr>';
	}
	echo '</table>';
} else {
	echo "<p>Please correct input to generate multiplication table.</p>";
}
?>
