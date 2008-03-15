<?php
/** 
 * 
 * Avaliacao Services
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

class RelatorioDetalhadoServices {
	
	public function getComboParticipantes() {
		$db = new ParticipanteDAO();
		$participantes = $db->getEmailParticipantes();
		
		$participanteId = (!empty($_POST["participanteId"])) ? $_POST["participanteId"] : 0;
		$options = "";
		
		foreach($participantes as $participante) {
			$selected = ($participante->getId() == $participanteId) ? "selected=\"selected\"" : "";
			$options .= "<option $selected value=\"{$participante->getId()}\">{$participante->getEmail()}</option>\n";
		}
		
		return $options;
	}
	
	public function getParticipante() {
		$db = new ParticipanteDAO();
		$participante = NULL;
		
		try {
			$participante = $db->getById($_POST["participanteId"]);
		}
		catch (Exception $e) {
			echo "Ocorreu uma exceção: ",  $e, "\n";
		}
		
		return $participante;
	}
	
};
?>