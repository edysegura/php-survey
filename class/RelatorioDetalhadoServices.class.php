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
		$options = "";
		
		foreach($participantes as $participante) {
			$options .= "<option value=\"{$participante->getId()}\">{$participante->getEmail()}</option>\n";
		}
		
		return $options;
	}
	
};
?>