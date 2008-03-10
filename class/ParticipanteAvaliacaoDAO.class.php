<?php
/**
 *
 * ParticipanteAvaliacaoDAO
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

class ParticipanteAvaliacaoDAO extends DAO {
	
	/*
	 * Inserindo novo participante
	 */
	public function insert(ParticipanteAvaliacaoTO $participanteAvaliacaoTO) {
		$DB = $this->getDB();
		
		$sQuery = "
			INSERT INTO participante_avaliacao (participante_id,item_pesquisa_id,avaliacao_id) VALUES (
			'" . $participanteAvaliacaoTO->getParticipanteId() . "',
			'" . $participanteAvaliacaoTO->getItemPesquisaId() . "',
			'" . $participanteAvaliacaoTO->getAvaliacaoId()    . "'
			);
		";

		if(!$DB->updateSQL($sQuery)) {
			throw new Exception("N&atilde;o foi poss&iacute;vel cadastrar avalia&ccedil;&atilde;o.");
		}
		
		$participanteAvaliacaoId = $DB->getLastId();
		return $participanteAvaliacaoId;
	}
	
};
?>