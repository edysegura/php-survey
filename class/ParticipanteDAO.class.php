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
	public function insert(ParticipanteTO $ParticipanteTO) {
		$DB = $this->getDB();
		
		$sQuery = "
			INSERT INTO participante (nome,telefone,empresa,email) VALUES (
			'" . $Produto->getNome()     . "',
			'" . $Produto->getTelefone() . "',
			'" . $Produto->getTelefone() . "',
			'" . $Produto->getEmail()    . "'
			);
		";

		if(!$DB->updateSQL($sQuery)) {
			throw new Exception("N&atilde;o foi poss&iacute;vel cadastrar participante.");
		}
		
		$participanteId = $DB->getLastId();
		return $participanteId;
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
			
			while($row = mysql_fetch_array($rsResult)) {
				$participante = new ParticipanteTO();

				$participante->setId($row['id']);
				$participante->setNome($row['nome']);
				$participante->setTelefone($row['telefone']);
				$participante->setEmpresa($row['empresa']);
				$participante->setEmail($row['email']);
			}
			
		}
		else {
			throw new Exception("N&atilde;o foi poss&iacute;vel recuperar participante por ID.");
		}
		
		return $participante;
	}
}
?>