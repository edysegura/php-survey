<?php
/**
 * 
 * Definicao do contextpath da aplicacao e da url base
 * @author: Edy Segura, edy@segura.eti.br
 *
 */

global $baseDir;
global $baseUrl;

$baseDir  = dirname(dirname(__FILE__));
$baseUrl  = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https://' : 'http://';
$baseUrl .= isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : getenv('HTTP_HOST');
$pathInfo = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : getenv('PATH_INFO');

if(@$pathInfo) {
  $baseUrl .= str_replace('\\', '/', dirname($pathInfo));
} 
else {
  $baseUrl .= str_replace('\\', '/', dirname(dirname( isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : getenv('SCRIPT_NAME'))));
}

//debug
//echo $baseDir, "<br /> ", $baseUrl; exit;
?>