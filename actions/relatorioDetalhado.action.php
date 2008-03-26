<?php
/**
 *
 * Relatorio Detalhado da avaliacao
 * @author: WebEngineers - contato@webengineers.com.br
 *  
 */

include "../includes/autoload.inc.php";
$rd = new RelatorioDetalhadoServices();
$id = "";

if(!empty($_REQUEST["participanteId"]) || 
   !empty($_POST["nomeId"]) || 
	 !empty($_POST["empresaId"])) {
	 
	if(!empty($_REQUEST["participanteId"])) {
		$id = $participanteId = $_REQUEST["participanteId"];
	}
	elseif (!empty($_POST["nomeId"])) {
		$id = $nomeId = $_POST["nomeId"];
	}
	elseif (!empty($_POST["empresaId"])) {
		$id = $empresaId = $_POST["empresaId"];
	}
	
	$participante = $rd->getParticipante($id);
	$avaliacoes   = $rd->getParticipanteAvaliacao($id);
}

$comboParticipantes = $rd->getComboParticipantes($participanteId);
$comboNomes         = $rd->getComboNomesParticipantes($nomeId);
$comboEmpresas      = $rd->getComboEmpresasParticipantes($empresaId);

?>