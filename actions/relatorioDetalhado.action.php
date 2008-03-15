<?php
/**
 *
 * Relatorio Detalhado da avaliacao
 * @author: WebEngineers - contato@webengineers.com.br
 *  
 */

include "../includes/autoload.inc.php";
$rd = new RelatorioDetalhadoServices();
$participanteId = "";

if(!empty($_POST["participanteId"]) || 
   !empty($_POST["nomeId"]) || 
	 !empty($_POST["empresaId"])) {
	 
	$participanteId = (!empty($_POST["participanteId"])) ? $_POST["participanteId"] : 
	                  (!empty($_POST["nomeId"])) ? $_POST["nomeId"] : $_POST["empresaId"];
	
	$participante = $rd->getParticipante($participanteId);
	$avaliacoes   = $rd->getParticipanteAvaliacao($participanteId);
}

$comboParticipantes = $rd->getComboParticipantes($participanteId);
$comboNomes         = $rd->getComboNomesParticipantes();
$comboEmpresas      = $rd->getComboEmpresasParticipantes();

?>