<?php 
include 'models/NodeModel.php';
if (isset($_GET["act"])) {
	$act = $_GET["act"];
	switch ($act) {
		case 'add':
			include 'resources/views/node/add.php';
			break;
		case 'edit':
			include 'resources/views/node/edit.php';
			break;
		case 'delete':
			include 'resources/views/node/delete.php';
			break;
		case 'list':
			include 'resources/views/node/list.php';
			break;
		case 'detail':
			include 'resources/views/node/detail.php';
			break;
		default:
			include 'resources/views/node/list.php';
			break;
	}
} else {
	include 'resources/views/node/list.php';
}
?>