<?php
/** 
 *
 * função magica __autoload que inclui 
 * automaticamente uma classe quando ela e instanciada
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

define("CLASS_PATH", dirname(dirname(__FILE__)) . "/class/");

function __autoload($className) {
	
	$aIgnoreList = array (
		"PEAR_Error",
		"pear"
	);
	
  if(file_exists(CLASS_PATH . $className . ".class.php")) {
    require_once(CLASS_PATH . $className . ".class.php");
  }
	else if(!in_array($className, $aIgnoreList)) {
    die ("<p>ERRO no arquivo <strong>" . CLASS_PATH . "</strong>. O arquivo da classe <strong>$className</strong> não foi encontrado, por favor entre em contato com o administrador do sistema para resolver este problema.</p>");
  }
}
?>
