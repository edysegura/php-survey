<?php
/**
 *
 * RelatorioGeral DAO
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

class RelatorioGeralDAO extends DAO {
	private $totalVotos;
	
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
	
	
	public function getTotalVotos() {
		$totalVotos = NULL;
		
		for($i=1; $i<=11; $i++) {
			for($j=1; $j<=4; $j++) {
				$totalVotos["item$i"][$j] = $this->getRelatorioGeral($i, $j);
			}
		}
		
		$this->totalVotos = $totalVotos;
		return $totalVotos;
	}
	
	
	public function getTotalPesquisa1($avaliacaoId) {
		$total = NULL;
		
		for($i=1; $i<=5; $i++) {
			$total += $this->totalVotos["item$i"][$avaliacaoId];
		}
		
		return $total;
	}
	
	
	public function getTotalPesquisa2($avaliacaoId) {
		$total = NULL;
		
		for($i=6; $i<=11; $i++) {
			$total += $this->totalVotos["item$i"][$avaliacaoId];
		}
		
		return $total;
	}
	
};
?>