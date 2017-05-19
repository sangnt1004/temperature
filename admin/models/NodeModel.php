<?php 
function listNodeDetail ($conn,$zigbee = 'zigbee1') {
	$stmt = $conn->prepare("SELECT `temperature`,`time` FROM `$zigbee` ORDER BY id DESC LIMIT 0 ,15");
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function selectNewTemp($conn, $zigbee = 'zigbee1'){
	$stmt = $conn->prepare("SELECT `temperature`,`time` FROM `$zigbee` ORDER BY id DESC LIMIT 0,1");
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}
function listNodes ($conn) {
	$stmt = $conn->prepare("SELECT * FROM `nodes`");
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

?>