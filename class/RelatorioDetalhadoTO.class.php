<?php
/** 
 * 
 * Relatorio Detalhado Transfer Object
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */
 
class RelatorioDetalhadoTO {

	private $nome;
	private $empresa;
	private $email;
	
	
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getNome() {
		return $this->nome;
	}
	
	public function setEmpresa($empresa) {
		$this->empresa = $empresa;
	}
	public function getEmpresa() {
		return $this->empresa;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	public function getEmail() {
		return $this->email;
	}
};
?>