<?php
/**
 *
 * RelatorioGeral DAO
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

class RelatorioGeralDAO extends DAO {
	
	public function getRelatorioGeral($itemPesquisaId, $avaliacaoId) {
		$DB = $this->getDB();
		
		$sQuery = "SELECT count(avaliacao_id) AS total_votos FROM participante_avaliacao
							 WHERE item_pesquisa_id = $itemPesquisaId and	avaliacao_id = $avaliacaoId
							 GROUP BY avaliacao_id";
		
		$rsResult = $DB->executeSQL($sQuery);
		
		if($rsResult != NULL) {
			$totalVotos = @mysql_result($rsResult, 0, "total_votos");
			$totalVotos = ($totalVotos) ? $totalVotos : 0;
		}
		else {
			$totalVotos = 0;
		}
		
		return $totalVotos;
	}
	
};
?>