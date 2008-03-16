<?php
/**
 *
 * Logout do sistema
 * @author: Edy Segura - edy@segura.eti.br
 * 
 */

include "../actions/validation.action.php";
include "$baseDir/actions/relatorioGeral.action.php";

header("Content-Type: application/octet-stream"); 
header("Content-disposition: attachment; filename=relatorio-geral.xls");
header("Pragma: no-cache"); 
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Expires: 0");
?>

<table border="1">
	<thead>
		<tr style="background:#CCCCCC;">
			<th colspan="5">Atendimento ao Telefone e Recepção</th>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<th>Bom</th>
			<th>Regular</th>
			<th>Ruim</th>
			<th>Não Utilizado</th>
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td>Pronto atendimento na solicitação de coletas</td>
			<td><?php echo $totalVotos["item1"][1]; ?></td>
			<td><?php echo $totalVotos["item1"][2]; ?></td>
			<td><?php echo $totalVotos["item1"][3]; ?></td>
			<td><?php echo $totalVotos["item1"][4]; ?></td>	
		</tr>
		
		<tr>
			<td>Comportamento e receptividade</td>
			<td><?php echo $totalVotos["item2"][1]; ?></td>
			<td><?php echo $totalVotos["item2"][2]; ?></td>
			<td><?php echo $totalVotos["item2"][3]; ?></td>
			<td><?php echo $totalVotos["item2"][4]; ?></td>	
		</tr>
		
		<tr>
			<td>Prontidão e exatidão na transferência das ligações</td>
			<td><?php echo $totalVotos["item3"][1]; ?></td>
			<td><?php echo $totalVotos["item3"][2]; ?></td>
			<td><?php echo $totalVotos["item3"][3]; ?></td>
			<td><?php echo $totalVotos["item3"][4]; ?></td>	
		</tr>
		
		<tr>
			<td>Eficiência / solução imediata de problemas</td>
			<td><?php echo $totalVotos["item4"][1]; ?></td>
			<td><?php echo $totalVotos["item4"][2]; ?></td>
			<td><?php echo $totalVotos["item4"][3]; ?></td>
			<td><?php echo $totalVotos["item4"][4]; ?></td>	
		</tr>
		
		<tr>
			<td>Precisão e confiabilidade nas informações prestadas</td>
			<td><?php echo $totalVotos["item5"][1]; ?></td>
			<td><?php echo $totalVotos["item5"][2]; ?></td>
			<td><?php echo $totalVotos["item5"][3]; ?></td>
			<td><?php echo $totalVotos["item5"][4]; ?></td>	
		</tr>
		
		<tr style="background:#CCCCCC;">
			<td>Total</td>
			<td><?php echo $totalPesquisa1["bom"]; ?></td>
			<td><?php echo $totalPesquisa1["regular"]; ?></td>
			<td><?php echo $totalPesquisa1["ruim"]; ?></td>
			<td><?php echo $totalPesquisa1["nao_utilizado"]; ?></td>
		</tr>
		
	</tbody>
</table>

<br />
<br />

<table border="1">
	<thead>
		<tr style="background:#CCCCCC;">
			<th colspan="5">Rodoviário Nacional</th>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<th>Bom</th>
			<th>Regular</th>
			<th>Ruim</th>
			<th>Não Utilizado</th>
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td>Pronto atendimento na solicitação de coletas</td>
			<td><?php echo $totalVotos["item6"][1]; ?></td>
			<td><?php echo $totalVotos["item6"][2]; ?></td>
			<td><?php echo $totalVotos["item6"][3]; ?></td>
			<td><?php echo $totalVotos["item6"][4]; ?></td>	
		</tr>
		
		<tr>
			<td>Cuidados / eficiência no manuseio da carga</td>
			<td><?php echo $totalVotos["item7"][1]; ?></td>
			<td><?php echo $totalVotos["item7"][2]; ?></td>
			<td><?php echo $totalVotos["item7"][3]; ?></td>
			<td><?php echo $totalVotos["item7"][4]; ?></td>	
		</tr>
		
		<tr>
			<td>Estado de conservação dos veículos</td>
			<td><?php echo $totalVotos["item8"][1]; ?></td>
			<td><?php echo $totalVotos["item8"][2]; ?></td>
			<td><?php echo $totalVotos["item8"][3]; ?></td>
			<td><?php echo $totalVotos["item8"][4]; ?></td>	
		</tr>
		
		<tr>
			<td>Apresentação dos funcionários</td>
			<td><?php echo $totalVotos["item9"][1]; ?></td>
			<td><?php echo $totalVotos["item9"][2]; ?></td>
			<td><?php echo $totalVotos["item9"][3]; ?></td>
			<td><?php echo $totalVotos["item9"][4]; ?></td>	
		</tr>
		
		<tr>
			<td>Eficiência / solução imediata de problemas</td>
			<td><?php echo $totalVotos["item10"][1]; ?></td>
			<td><?php echo $totalVotos["item10"][2]; ?></td>
			<td><?php echo $totalVotos["item10"][3]; ?></td>
			<td><?php echo $totalVotos["item10"][4]; ?></td>	
		</tr>
		
		<tr>
			<td>Satisfação nos serviços prestados</td>
			<td><?php echo $totalVotos["item11"][1]; ?></td>
			<td><?php echo $totalVotos["item11"][2]; ?></td>
			<td><?php echo $totalVotos["item11"][3]; ?></td>
			<td><?php echo $totalVotos["item11"][4]; ?></td>	
		</tr>
		
		<tr style="background:#CCCCCC;">
			<td>Total</td>
			<td><?php echo $totalPesquisa2["bom"]; ?></td>
			<td><?php echo $totalPesquisa2["regular"]; ?></td>
			<td><?php echo $totalPesquisa2["ruim"]; ?></td>
			<td><?php echo $totalPesquisa2["nao_utilizado"]; ?></td>
		</tr>
		
	</tbody>
</table>