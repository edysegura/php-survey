<?php
/** 
 * 
 * Avaliacao Services
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

class AvaliacaoServices {
	private $participanteId = NULL;
	private $avaliacaoParticipanteId = NULL;
	
	
	public function insertAvaliacao() {
		$result = FALSE;
		
		if($this->insertParticipante() && $this->insertParticipanteAvaliacao()) {
			$result = TRUE;
		}
		
		return $result;
	}
	
	
	private function insertParticipante() {
		$participante = new ParticipanteTO();
		
		$participante->setNome($_POST["nome"]);
		$participante->setTelefone($_POST["telefone"]);
		$participante->setEmpresa($_POST["empresa"]);
		$participante->setEmail($_POST["email"]);
		$participante->setComentario($_POST["comentario"]);
		
		try {
			$participanteDAO = new ParticipanteDAO();
			
			if(!$participanteDAO->getByEmail($participante->getEmail())) {
				$this->participanteId = $participanteDAO->insert($participante);
			}
		}
		catch (Exception $e) {
			echo "Ocorreu uma exceção: ",  $e, "\n";
		}
		
		return $this->participanteId;
	}
	
	
	private function insertParticipanteAvaliacao() {
		$numeroDeAvaliacoes = 11;
		$participanteAvaliacaoDAO = new ParticipanteAvaliacaoDAO();
		
		for($i=1; $i<=$numeroDeAvaliacoes; $i++) {
			$avaliacao = new ParticipanteAvaliacaoTO();
			
			$avaliacao->setParticipanteId($this->participanteId);
			$avaliacao->setItemPesquisaId($i);
			$avaliacao->setAvaliacaoId($_POST["item$i"]);
			
			try {
				$this->avaliacaoParticipanteId = $participanteAvaliacaoDAO->insert($avaliacao);
			}
			catch (Exception $e) {
				echo "Ocorreu uma exceção: ",  $e, "\n";
			}
		}
		
		return $this->avaliacaoParticipanteId;
	}
};
?>