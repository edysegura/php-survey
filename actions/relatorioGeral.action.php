<?php
/**
 *
 * Relatorio Geral da avaliacao
 * @author: WebEngineers - contato@webengineers.com.br
 *  
 */

include "../includes/autoload.inc.php";
$relatorioGeral = new RelatorioGeralDAO();

for($i=1; $i<=11; $i++) {
	for($j=1; $j<=4; $j++) {
		$totalVotos["item$i"][$j] = $relatorioGeral->getRelatorioGeral($i, $j);
	}
}

//debug
//echo "<pre>"; print_r($totalVotos); echo "</pre>";
?>