<?php
/** 
 * 
 * Avaliacao Services
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

class RelatorioDetalhadoServices {
	
	public function getComboParticipantes($participanteId = NULL) {
		$db = new ParticipanteDAO();
		$participantes = $db->getEmailParticipantes();
		
		$participanteId = (!empty($participanteId)) ? $participanteId : 0;
		$options = "";
		
		foreach($participantes as $participante) {
			$selected = ($participante->getId() == $participanteId) ? "selected=\"selected\"" : "";
			$options .= "<option $selected value=\"{$participante->getId()}\">{$participante->getEmail()}</option>\n";
		}
		
		return $options;
	}
	
	public function getComboNomesParticipantes($participanteId = NULL) {
		$db = new ParticipanteDAO();
		$participantes = $db->getNomesParticipantes();
		
		$participanteId = (!empty($participanteId)) ? $participanteId : 0;
		$options = "";
		
		foreach($participantes as $participante) {
			$selected = ($participante->getId() == $participanteId) ? "selected=\"selected\"" : "";
			$options .= "<option $selected value=\"{$participante->getId()}\">{$participante->getNome()}</option>\n";
		}
		
		return $options;
	}
	
	public function getComboEmpresasParticipantes($participanteId = NULL) {
		$db = new ParticipanteDAO();
		$participantes = $db->getEmpresasParticipantes();
		
		$participanteId = (!empty($participanteId)) ? $participanteId : 0;
		$options = "";
		
		foreach($participantes as $participante) {
			$selected = ($participante->getId() == $participanteId) ? "selected=\"selected\"" : "";
			$options .= "<option $selected value=\"{$participante->getId()}\">{$participante->getEmpresa()}</option>\n";
		}
		
		return $options;
	}
	
	
	public function getParticipante($participanteId) {
		$db = new ParticipanteDAO();
		$participante = NULL;
		
		$participanteId = (!empty($participanteId)) ? $participanteId : 0;
		
		try {
			$participante = $db->getById($participanteId);
		}
		catch (Exception $e) {
			echo "Ocorreu uma exceção: ",  $e, "\n";
		}
		
		return $participante;
	}
	
	public function getParticipanteAvaliacao($participanteId) {
		$db = new RelatorioDetalhadoDAO();
		$avaliacoes = NULL;
		
		$participanteId = (!empty($participanteId)) ? $participanteId : 0;
		
		try {
			$avaliacoes = $db->getParticipanteAvaliacao($participanteId);
		}
		catch (Exception $e) {
			echo "Ocorreu uma exceção: ",  $e, "\n";
		}
		
		return $avaliacoes;
	}
	
};
?>