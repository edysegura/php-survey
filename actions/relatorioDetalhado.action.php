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
	$participante = $rd->getParticipante();
}

$options = $rd->getComboParticipantes();

?>