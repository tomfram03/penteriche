<?php

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index');
	exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT email FROM usuarios WHERE email = '$email' and senha = '$senha' ";
mysqli_query($conn, $query);

if(mysqli_affected_rows($conn)>0) {
	$_SESSION['email'] = $email;
	header('Location: admin');
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login');
}
?>
