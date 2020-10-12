<?php 
session_start();
ob_start();
include_once("conexao.php");
require "classes/Url.class.php";

$url = str_replace("/", "", $_SERVER["REQUEST_URI"]);
$url = str_replace(".php", "", $url);

if(!isset($_SESSION['email'])){
	$userLogado = false;
}else{
	$userLogado = true;
}
?>
<!doctype html>
<html lang="pt-br">
<head>
	<title>Michelly Penteriche</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<!-- Folha de Estilo Icons FontAwesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap CSS -->	
	<link rel="stylesheet" href="css/bootstrap.css?2">
	<link rel="stylesheet" href="css/bootstrap.min_cal.css?2">	
	<link rel="stylesheet" href="css/estilo.css?2">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script language="javascript">
	function jumpto(x){

		if (document.form2.jumpmenu.value != "null") {
			document.location.href = x
		}
	}
	</script>
	<script type="text/javascript" src="js/jquery.mask.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		// $('input[type="telefone"], input[type="telephone"], #telefone, #celular').mask('(00) 0000-00009');
  //       $('input[type="telefone"], input[type="telephone"], #telefone, #celular').blur(function(event) {
  //         if($(this).val().length == 14){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
  //           $('input[type="telefone"], input[type="telephone"], #telefone, #celular').mask('(00) 0000-0000');
  //         } else {
  //           $('input[type="telefone"], input[type="telephone"], #telefone, #celular').mask('(00) 90000-0000');
  //         }
  //       });

		$("#cep").mask("00000-000");
		$("#date_nasc").mask("99/99/9999");
	});
	</script>

</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<ul class="logo">
						<li><a href="<?php echo URL::getBase(); ?>"><img src="images/logo.png" alt="Michelly Penteriche" /></a></li>
					</ul>				
				</div>
			</div>
		</div>
	</header>  

	<nav class="navbar navbar-expand-lg navbar-light bg-thema">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i> Menu
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent"> 
				<?php require_once("menu_navigator.php"); ?>
			</div>
		</div>
	</nav>
	
	<div class="box-whatsapp">
		<a href="https://api.whatsapp.com/send?phone=5515996887595&text=Olá gostaria de fazer um agendamento com a Michelly" target="_blank">
			<img src="images/whatsapp.png" class="img-responsive" alt="WhatsApp para Atendimento" />
		</a>
	</div>