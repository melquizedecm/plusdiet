<?php 
	session_start();
	// connect to database
	$db = mysqli_connect('localhost','root','','diet');
	// variable declaration
	$username = "";
	$email    = "";
	$errors   = array(); 
	// llamar a la función register () si se hace clic en register_btn
	// if (isset($_POST['register_btn'])) {
	// 	register();
	// }
	// llamar a la función de inicio de sesión () si se hace clic en register_btn
	if (isset($_POST['login_btn'])) {
		login();
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../views/sesion.php");
	}
	// REGISTER USER
	function register(){
		global $db, $errors;
		// recibir todos los valores de entrada desde el formulario
		$username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password']);
		// validación del formulario: asegúrese de que el formulario esté correctamente rellenado
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		// Registrar usuario si no hay errores en el formulario.
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: home.php');
			}else{
				$query = "INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', 'user', '$password')";
				mysqli_query($db, $query);
				// Obtener ID del usuario creado
				$logged_in_user_id = mysqli_insert_id($db);
				$_SESSION['user'] = getUserById($logged_in_user_id); // poner usuario registrado en sesión
				$_SESSION['success']  = "You are now logged in";
				header('location: index.html');				
			}
		}
	}

	// devuelve la matriz de usuario desde su id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM usuarios WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Se requiere nombre de usuario");
		}
		if (empty($password)) {
			array_push($errors, "Se requiere contraseña");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM usuarios WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['status'] == '1') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "Ahora está conectado";
					header('location: ../views/inicio.php');		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "No está conectado";

					header('location: ../views/sesion.php');
				}
			}else {
				array_push($errors, "Combinación incorrecta de nombre de usuario o contraseña");
			}
		}
	}
	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}
	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['status'] == '1' ) {
			return true;
		}else{
			return false;
		}
	}
	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}
	function display_error() {
		global $errors;
		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}
?>