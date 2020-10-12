<?php require('header.php');

$modulo = Url::getURL( 0 );


if( $modulo == null )
	$modulo = "principal";

if( file_exists( "paginas/" . $modulo . ".php" ) )
	require "paginas/" . $modulo . ".php";
else
	require "paginas/404.php";


require('footer.php');?>