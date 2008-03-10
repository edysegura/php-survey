<?php
/**
 *
 * Autenticacao do usuario
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

session_start();
require "../includes/contextpath.inc.php";
require $baseDir . "/includes/autoload.inc.php";

$authenticationFail = "";

if(!empty($_POST["usuario"]) && !empty($_POST["senha"])) {
	$UsuarioDAO = new UsuarioDAO();
	
	if($UsuarioDAO->validaUsuario($_POST['usuario'], $_POST['senha'])) {
		header("Location: $baseUrl/admin/relatorio-geral.php");
		exit;
	}
	else {
		$authenticationFail = "<p class=\"authentication-fail\">Nome de usuário e/ou senha incorretos.</p>";
	}
}
else if(sizeof($_POST)) {
	$authenticationFail = "<p class=\"authentication-fail\">Informe todos os campos corretamente.</p>";
}

?>
