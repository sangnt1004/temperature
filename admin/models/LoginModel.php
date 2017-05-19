<?php 
function login ($conn,$data) {
	$stmt = $conn->prepare("SELECT * FROM `user` WHERE email = :email AND password = :password AND status = :status AND level = :level");
	$stmt->bindParam(":email",$data["email"],PDO::PARAM_STR);
	$stmt->bindParam(":password",$data["password"],PDO::PARAM_STR);
	$stmt->bindParam(":status",$data["status"],PDO::PARAM_STR);
	$stmt->bindParam(":level",$data["level"],PDO::PARAM_INT);
	$stmt->execute();
	$row = $stmt->rowCount();
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($row != 0) {
		$_SESSION["user"]['id']     = $user["id"];
		$_SESSION["user"]['email']  = $user["email"];
		$_SESSION["user"]['level'] = $user["level"];
		$_SESSION["user"]['name']   = $user["name"];
		redirect();
	} else {
		redirect('login.php');
	}
}
	
?>