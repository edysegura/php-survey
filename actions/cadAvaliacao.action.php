<?php
/**
 *
 * Cadastro da Avaliacao
 * @author WebEngineers - contato@webengineers.com.br
 *
 */

define("PATH", dirname(dirname(__FILE__)));
include PATH . "/includes/contextpath.inc.php";
include PATH . "/includes/autoload.inc.php";

if(sizeof($_POST) && !empty($_POST['email'])) {
	//debug
	//echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
	
	$avaliacaoServices = new AvaliacaoServices();
	if($avaliacaoServices->insertAvaliacao()) {
		header("Location: $baseUrl/paginas/confirmacao.html");
	}
	else {
		echo "E-mail ja' cadastrado! Porfavor informe um novo e-mail para essa avaliacao.";
		//header("Location: $baseUrl/?error=2");
	}
	
}
else {
	header("Location: $baseUrl/?error=1");
}
?>