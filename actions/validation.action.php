<?php
/**
 *
 * Validacao do usuario
 * @author: WebEngineers - contato@webengineers.com.br
 *  
 */

session_start();

define("PATH", dirname(dirname(__FILE__)));
include PATH. "/includes/contextpath.inc.php";

if(empty($_SESSION["authentication"]) || session_id() != $_COOKIE['PHPSESSID']) {
	header("Location: $baseUrl/admin/");
	exit;
}

?>