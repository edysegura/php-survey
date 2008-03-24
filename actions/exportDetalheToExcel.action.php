<?php
/**
 *
 * Logout do sistema
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

include "../actions/validation.action.php";
include "$baseDir/actions/relatorioDetalhado.action.php";

header("Content-Type: application/octet-stream"); 
header("Content-disposition: attachment; filename=relatorio-detalhado.xls");
header("Pragma: no-cache"); 
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Expires: 0");
?>

<table border="1">
	<thead>
		<tr style="background:#CCCCCC;">
			<th>Informações do Participante:</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Nome:</strong> <?php echo $participante->getNome(); ?></td>
			<td><strong>Telefone:</strong> <?php echo $participante->getTelefone(); ?></td>
			<td><strong>Empresa:</strong>	<?php echo $participante->getEmpresa(); ?></td>
			<td><strong>Comentário:</strong>	<?php echo ($participante->getComentario()) ? stripslashes($participante->getComentario()) : "&nbsp;"; ?></td>
		</tr>
	</tbody>
</table>

<table border="1">
	<thead>
		<tr style="background:#CCCCCC;">
			<th colspan="2">Atendimento ao Telefone e Recepção:</th>
		</tr>
		<tr>
			<th></th>
			<th>Avaliação</th>
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td>Pronto atendimento na solicitação de coletas</td>
			<td><?php echo $avaliacoes["item1"]; ?></td>
		</tr>
					
		<tr>
			<td>Comportamento e receptividade</td>
			<td><?php echo $avaliacoes["item2"]; ?></td>
		</tr>
		
		<tr>
			<td>Prontidão e exatidão na transferência das ligações</td>
			<td><?php echo $avaliacoes["item3"]; ?></td>
		</tr>
		
		<tr>
			<td>Eficiência / solução imediata de problemas</td>
			<td><?php echo $avaliacoes["item4"]; ?></td>
		</tr>
		
		<tr>
			<td>Precisão e confiabilidade nas informações prestadas</td>
			<td><?php echo $avaliacoes["item5"]; ?></td>
		</tr>
		
	</tbody>
</table>

<br />
<br />

<table border="1">
	<thead>
		<tr style="background:#CCCCCC;">
			<th colspan="2">Rodoviário Nacional:</th>
		</tr>
		<tr>
			<th></th>
			<th>Avaliação</th>
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td>Pronto atendimento na solicitação de coletas</td>
			<td><?php echo $avaliacoes["item6"]; ?></td>
		</tr>
		
		<tr>
			<td>Cuidados / eficiência no manuseio da carga</td>
			<td><?php echo $avaliacoes["item7"]; ?></td>
		</tr>
		
		<tr>
			<td>Estado de conservação dos veículos</td>
			<td><?php echo $avaliacoes["item8"]; ?></td>
		</tr>
		
		<tr>
			<td>Apresentação dos funcionários</td>
			<td><?php echo $avaliacoes["item9"]; ?></td>
		</tr>
		
		<tr>
			<td>Eficiência / solução imediata de problemas</td>
			<td><?php echo $avaliacoes["item10"]; ?></td>
		</tr>
		
		<tr>
			<td>Satisfação nos serviços prestados</td>
			<td><?php echo $avaliacoes["item11"]; ?></td>
		</tr>
		
	</tbody>
</table>