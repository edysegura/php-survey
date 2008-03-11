<?php
/**
 *
 * Relatorio Geral da avaliacao
 * @author: WebEngineers - contato@webengineers.com.br
 *  
 */

include "../includes/autoload.inc.php";
$relatorioGeral = new RelatorioGeralDAO();

$totalVotos                      = $relatorioGeral->getTotalVotos();
$totalPesquisa1["bom"]           = $relatorioGeral->getTotalPesquisa1(1);
$totalPesquisa1["regular"]       = $relatorioGeral->getTotalPesquisa1(2);
$totalPesquisa1["ruim"]          = $relatorioGeral->getTotalPesquisa1(3);
$totalPesquisa1["nao_utilizado"] = $relatorioGeral->getTotalPesquisa1(4);

$totalPesquisa2["bom"]           = $relatorioGeral->getTotalPesquisa2(1);
$totalPesquisa2["regular"]       = $relatorioGeral->getTotalPesquisa2(2);
$totalPesquisa2["ruim"]          = $relatorioGeral->getTotalPesquisa2(3);
$totalPesquisa2["nao_utilizado"] = $relatorioGeral->getTotalPesquisa2(4);

//debug
//echo "<pre>"; print_r($totalVotos); echo "</pre>";
?>