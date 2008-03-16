<?php
/**
 *
 * RelatorioDetalalhado DAO
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

class RelatorioDetalhadoDAO extends DAO {
	
	public function getParticipanteAvaliacao($participanteId) {
		$DB = $this->getDB();
		$avaliacoes = NULL;
		
		$sQuery = "SELECT participante.id as participanteId, 
		                  participante_avaliacao.item_pesquisa_id as pergunta, avaliacao.descricao 
						  FROM participante
                   LEFT JOIN participante_avaliacao ON participante_avaliacao.participante_id = participante.id
                   LEFT JOIN avaliacao ON avaliacao.id = participante_avaliacao.avaliacao_id
                   WHERE participante.id = $participanteId";
		
		$rsResult = $DB->executeSQL($sQuery);
		
		if($rsResult != NULL) {
			$avaliacoes = $this->getAvaliacoes($rsResult);
		}
		else {
			throw new Exception("N&atilde;o foi poss&iacute;vel recuperar participantes.");
		}
		
		return $avaliacoes;
	}
	
	
	private function getAvaliacoes($rsResult) {
		$avaliacoes = NULL;
		
		if($rsResult != NULL) {
			$i = 1;
			while($row = mysql_fetch_array($rsResult)) {
				$avaliacoes["item$i"] = $row["descricao"];
				$i++;
			}
		}
		else {
			throw new Exception("N&atilde;o foi poss&iacute;vel recuperar avaliacao.");
		}
		
		return $avaliacoes;
	}
	
};
?>