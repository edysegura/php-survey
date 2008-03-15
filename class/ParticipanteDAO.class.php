<?php
/**
 *
 * ParticipanteDAO
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

class ParticipanteDAO extends DAO {
	
	/*
	 * Inserindo novo participante
	 */
	public function insert(ParticipanteTO $participanteTO) {
		$DB = $this->getDB();
		
		$sQuery = "
			INSERT INTO participante (nome,telefone,empresa,email,comentario) VALUES (
			'" . mysql_real_escape_string($participanteTO->getNome())       . "',
			'" . mysql_real_escape_string($participanteTO->getTelefone())   . "',
			'" . mysql_real_escape_string($participanteTO->getEmpresa())    . "',
			'" . mysql_real_escape_string($participanteTO->getEmail())      . "',
			'" . mysql_real_escape_string($participanteTO->getComentario()) . "'
			);
		";

		if(!$DB->updateSQL($sQuery)) {
			throw new Exception("N&atilde;o foi poss&iacute;vel cadastrar participante.");
		}
		
		$participanteId = $DB->getLastId();
		return $participanteId;
	}
	
	
	/*
	 * Recuperando todos os participantes
	 */
	public function getEmailParticipantes() {
		$participantes = NULL;
		$DB = $this->getDB();
		
		$sQuery   = "SELECT id, email FROM participante";
		$rsResult = $DB->executeSQL($sQuery);
		
		if($rsResult != NULL) {
			$participantes = $this->getParticipanteTO($rsResult);
		}
		else {
			throw new Exception("N&atilde;o foi poss&iacute;vel recuperar participantes.");
		}
		
		return $participantes;
	}
	
	
	/*
	 * Recuperando tupla pelo ID
	 */
	public function getById($id) {
		$participante = NULL;
		$DB = $this->getDB();
		
		$sQuery   = "SELECT * FROM participante WHERE id = " . $id;
		$rsResult = $DB->executeSQL($sQuery);
		
		if($rsResult != NULL) {
			$participante = $this->getParticipanteTO($rsResult);
		}
		else {
			throw new Exception("N&atilde;o foi poss&iacute;vel recuperar participante por ID.");
		}
		
		return $participante[0];
	}
	
	
	/*
	 * Recuperando tupla pelo email
	 */
	public function getByEmail($email) {
		$participante = NULL;
		$DB = $this->getDB();
		
		$sQuery   = "SELECT * FROM participante WHERE email = '" . $email . "'";
		$rsResult = $DB->executeSQL($sQuery);
		
		if($rsResult != NULL) {
			$participante = $this->getParticipanteTO($rsResult);
		}
		else {
			throw new Exception("N&atilde;o foi poss&iacute;vel recuperar participante por email.");
		}
		
		return $participante[0];
	}
	
	
	public function getParticipanteTO($rsResult) {
		$participantesTO = NULL;
		
		if($rsResult != NULL) {
			
			while($row = mysql_fetch_array($rsResult)) {
				$participante = new ParticipanteTO();
				
				$participante->setId($row['id']);
				$participante->setNome($row['nome']);
				$participante->setTelefone($row['telefone']);
				$participante->setEmpresa($row['empresa']);
				$participante->setEmail($row['email']);
				$participante->setComentario($row['comentario']);
				
				$participantesTO[] = $participante;
			}
		}
		else {
			throw new Exception("N&atilde;o foi poss&iacute;vel recuperar participantesTO.");
		}
		
		return $participantesTO;
	}
}
?>