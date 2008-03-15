<?php
/**
 *
 * Relatorio Detalhado da avaliacao
 * @author: WebEngineers - contato@webengineers.com.br
 *  
 */

include "../includes/autoload.inc.php";
$rd = new RelatorioDetalhadoServices();

$options = $rd->getComboParticipantes();
?>