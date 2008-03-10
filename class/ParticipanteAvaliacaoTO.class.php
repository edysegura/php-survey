<?php
/**
 * 
 * Participante Avaliacao Transfer Object
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

class ParticipanteAvaliacaoTO {

	private $id;
	private $participanteId;
	private $itemPesquisaId;
	private $avaliacaoId;
	
	
	public function setId($id) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	
	
	public function setParticipanteId($participanteId) {
		$this->participanteId = $participanteId;
	}
	public function getParticipanteId() {
		return $this->participanteId;
	}
	
	public function setItemPesquisaId($itemPesquisaId) {
		$this->itemPesquisaId = $itemPesquisaId;
	}
	public function getItemPesquisaId() {
		return $this->itemPesquisaId;
	}
	
	public function setAvaliacaoId($avaliacaoId) {
		$this->avaliacaoId = $avaliacaoId;
	}
	public function getAvaliacaoId() {
		return $this->avaliacaoId;
	}
	
};
?>