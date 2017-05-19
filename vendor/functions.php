<?php

function auth ($session,$url) {
	if (!isset($session)) {
		header("location:$url");
		exit();
	}
}
function checkEmpty ($value) {
	if (!isset($value) || empty(trim($value))) {
		return true;
	} else {
		return false;
	}
}

function redirect ($url = '') {
	if (empty($url)) {
		header("location:index.php");
		exit();
	}else{
		header("location:index.php?$url");
		exit();
	}
}
function issetInput ($input,$val = '') {
	if (isset($_POST[$input])) {
		echo 'value="'.$_POST[$input].'"';
	} else {
		echo 'value="'.$val.'"';
	}
}
function checkTemp ($node, $temp){
	if($temp >= 50){
		$_SESSION['warning'] = "Node".$node." - ".$temp." &degC";
	}
	else
		unset($_SESSION['warning']);
}
?>
