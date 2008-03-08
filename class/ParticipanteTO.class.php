<?php
/** 
 * 
 * Participante Transfer Object
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */
 
class ParticipanteTO {

	private $id;
	private $nome;
	private $telefone;
	private $empresa;
	private $email;
	
	
	public function setId($id) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	
	
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getNome() {
		return $this->nome;
	}
	
	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}
	public function getTelefone() {
		return $this->telefone;
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