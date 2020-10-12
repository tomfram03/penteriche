<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "michellypente_website";

$conn = mysqli_connect($servername, $username, $password, $db)
or die ('Não foi possível conectar');

if (mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;
?>