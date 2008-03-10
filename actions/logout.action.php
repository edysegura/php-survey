<?php
/**
 *
 * Logout do sistema
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

//inicializa a sessao
session_start();
include "../includes/contextpath.inc.php";

unset($_SESSION["authentication"]);

session_unset();
session_destroy();

//redireciona para a tela de login
header("Location: $baseUrl/admin/");
?>