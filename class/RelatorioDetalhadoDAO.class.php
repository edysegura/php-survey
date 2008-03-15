<?php
/**
 *
 * RelatorioDetalalhado DAO
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

class RelatorioDetalhadoDAO extends DAO {
	private $participante = NULL;
	
	public function getRelatorioGeral($filtro = NULL) {
		$DB = $this->getDB();
		
		$sQueryPre = "SELECT participante.email, participante.nome, participante.telefone, participante.comentario,
									participante_avaliacao.item_pesquisa_id as pergunta, avaliacao.descricao
									FROM participante
									LEFT JOIN participante_avaliacao ON participante_avaliacao.participante_id = participante.id
									LEFT JOIN avaliacao ON avaliacao.id = participante_avaliacao.avaliacao_id ";
									
		$sQuery     = "";
		$firstParam = true;
		
		if(!is_null($id) && !empty($id)){
			$sQuery .= ($firstParam)? " participante.id = $id" : " and participante.id = $id ";
			$firstParam = false;
		}
		
		if(!is_null($filtro) && !empty($filtro)){
			if($filtro->getEmail() != NULL && $filtro->getEmail() != ""){
				$sQuery .= ($firstParam)? " email  LIKE '%{$filtro->getEmail()}%'" : " and email LIKE '%{$filtro->getEmail()}%' ";
				$firstParam = false;	
			}
		}
		
		if(!is_null($filtro) && !empty($filtro)){
			if($filtro->getNome() != NULL && $filtro->getNome() != ""){
				$sQuery .= ($firstParam)? " nome LIKE '%{$filtro->getNome()}%'" : " and nome LIKE '%{$filtro->getNome()}%' ";
				$firstParam = false;	
			}
		}
		
		if(!is_null($filtro) && !empty($filtro)){
			if($filtro->getEmpresa() != NULL && $filtro->getEmpresa() != ""){
				$sQuery .= ($firstParam)? " empresa LIKE '%{$filtro->getEmpresa()}%'" : " and empresa LIKE '%{$filtro->getEmpresa()}%' ";
				$firstParam = false;	
			}
		}
		
		if(!empty($sQuery)){
			$sQueryPre .= " where $sQuery ORDER BY participante.nome";
		}
		
		$rsResult = $DB->executeSQL($sQuery);
		
		if($rsResult != NULL) {
			
			while($row = mysql_fetch_array($rsResult)) {
				$Contato = new Contato();
				
				$Participante->setEmail($row['email']);
				$Participante->setNome($row['nome']);
				$Participante->setEmpresa($row['empresa']);		
				$participantes[] = $Participante;
			}
			
		}
		else {
			$DB->closeConnection();
			throw new Exception("N&atilde;o foi poss&iacute;vel recuperar as respostas.");
		}
		
		return $participantes;
	}
	
};
?>