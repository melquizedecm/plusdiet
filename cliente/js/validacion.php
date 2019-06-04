<?php
function isNull($username, $nombre, $email, $password, $c_password){
	if (strlen(trim($username)) < 1 || strlen(trim($nombre)) <1 || strlen(trim($email)) <1 || strlen(trim($password)) <1 || strlen(trim($c_password)) <1) {
		return true;
	}else{
		return false;
	}
}
function isEmail($email){
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	}else{
		return false;
	}
}
function validapassword($var1,$var2){
	if (strlen(trim($valor)) < $min) {
		return true;
	}else{
		return false;
	}
}
function resultBlock($errors){
	if (count($errors) > 0) {
		echo "<div id='error' class='alert alert-danger' role='alert'>
		<a href='#' onclick=\"showHide('error');\">[X]</a>
		<ul>";
		foreach ($errors as $error){
			echo "<li>".$error."</li>";
		}
		echo "</ul>";
		echo "</div>";
	}
}
function usuariosExiste($usuario){
	global $mysqli;
	$stmt = $mysqli->prepare("select id from usuarios where username = ? limit 1");
	$stmt->bind_param("s", $usuario);
	$stmt->execute();
	$stmt->store_result();
	$num = $stmt->num_rows;
	$stmt->close();
	if ($num >0) {
		return true;
	}else{
		return false;
	}
}
function nombreExiste($nombre){
	global $mysqli;
	$stmt = $mysqli->prepare("select id from usuarios where nombre = ? limit 1");
	$stmt->bind_param("s", $nombre);
	$stmt->execute();
	$stmt->store_result();
	$num = $stmt->num_rows;
	$stmt->close();
	if ($num >0) {
		return true;
	}else{
		return false;
	}
}	
function emialExiste($email){
	global $mysqli;
	$stmt = $mysqli->prepare("select id from usuarios where email = ? limit 1");
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt->store_result();
	$num = $stmt->num_rows;
	$stmt->close();
	if ($num >0) {
		return true;
	}else{
		return false;
	}
}	
function hashPassword($password){
	$hash = password_hash($password, password_default);
	return $hash;
}
function generateToken(){
	$gen = md5(uniqid(mt_rand(),false));
	return $gen;
}	
function registroUsuarios($username,$nombre,$email,$pass_hash){
	global $mysqli;
	$stmt = $mysqli->prepare("insert into usuarios (username, nombre, email, password) value(?,?,?,?)");
	$stmt->bind_param("ssss", $username,$nombre,$email,$pass_hash);

	if ($stmt->execute()) {
		return $stmt->insert_id;
	}else{
		return 0;
	}
}

?>