<?php
/**
 *
 * Relatorio Detalhado da avaliacao
 * @author: WebEngineers - contato@webengineers.com.br
 *  
 */

include "../includes/autoload.inc.php";
$rd = new RelatorioDetalhadoServices();

if(!empty($_POST["participanteId"])) {
	$participante = $rd->getParticipante($_POST["participanteId"]);
	$avaliacoes   = $rd->getParticipanteAvaliacao($_POST["participanteId"]);
}

$comboParticipantes = $rd->getComboParticipantes($_POST["participanteId"]);

?>