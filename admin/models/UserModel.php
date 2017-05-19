<?php 
function listUser ($conn) {
	$stmt = $conn->prepare("SELECT id,email,level,status,name FROM `user`");
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}
function add($conn, $data,&$error){
	$check = $conn->prepare("SELECT `email` FROM `user` WHERE email = :email");
	$check->bindParam(":email",$data["email"],PDO::PARAM_STR);
	$check->execute();
	$rowCount = $check->rowCount();

	if ($rowCount == 0) {
		$stmt = $conn->prepare("INSERT INTO `user`(`email`, `password`, `level`, `name`, `status`, `created_at`) VALUES (:email, :password,:level,:name,:status,:created_at)");
		$stmt->bindParam(":email",$data["email"],PDO::PARAM_STR);
		$stmt->bindParam(":password",$data["pass"],PDO::PARAM_STR);
		$stmt->bindParam(":level",$data["level"],PDO::PARAM_INT);
		$stmt->bindParam(":name",$data["name"],PDO::PARAM_STR);
		$stmt->bindParam(":status",$data["status"],PDO::PARAM_STR);
		$stmt->bindParam(":created_at",$data["created_at"],PDO::PARAM_INT);
		$stmt->execute();

		if (isset($_POST["btnSubmit"])) {
			// setFlash ("success" , "Oke !! Complate Insert A User");
			redirect ('con=user');
		}
	} else {
		$error[] = "This Email Is Exist.Please Choose Email Difference";
	}

}
?>