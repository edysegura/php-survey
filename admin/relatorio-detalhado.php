<?php 
	include "../actions/validation.action.php";
	include "$baseDir/actions/relatorioDetalhado.action.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<base href="<?php echo $baseUrl; ?>/" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="author" content="WebEngineers" />
<meta name="reply-to" content="contato@webengineers.com.br" />
<title>Transportadora LOBO e LOBO - Pesquisa de Satisfação dos Clientes</title>

<!-- stylesheet -->
<link rel="stylesheet" href="css/loboelobo/relatorio-detalhado.css" type="text/css" title="Lobo e Lobo" />

<!-- javascript -->
<script type="text/javascript" src="js/RelatorioDetalhado.js"></script>

</head>
<body id="index">

	<!-- global -->
	<div id="global">
		<!-- header -->
		<div id="header">
			<h1>Transportadora LOBO e LOBO</h1>
		</div>
		
		<!-- content -->
		<div id="content">
			
			<p class="link">
				<?php if(!empty($id)) {?>
					<a href="actions/exportDetalheToExcel.action.php?participanteId=<?php echo $id; ?>" class="excel" title="Exportar para Excel">Excel</a> | 
				<?php } ?>
				<a href="admin/relatorio-geral.php">Relatório Geral</a> | 
				<a href="actions/logout.action.php">Sair</a>
			</p>
			
			<h1 id="title-admin">Resultado Detalhado da Pesquisa</h1>
			
			<form id="filter" method="post" action="" class="filter">
				<fieldset>
					<legend>Filtro</legend>
					
					<p title="E-mail do Participante">
						<label for="participanteId">E-mail:</label>
						<select name="participanteId" id="participanteId">
							<option value="">[...]</option>
							<?php echo $comboParticipantes; ?>
						</select>
					</p>
					
					<p title="Nome do Participante">
						<label for="nomeId">Nome:</label>
						<select name="nomeId" id="nomeId">
							<option value="">[...]</option>
							<?php echo $comboNomes; ?>
						</select>
					</p>
					
					<p title="Empresa do Participante">
						<label for="empresaId">Empresa:</label>
						<select name="empresaId" id="empresaId">
							<option value="">[...]</option>
							<?php echo $comboEmpresas; ?>
						</select>
					</p>
					
					<div class="botoes">
						<input type="submit" value="Filtrar" />
					</div>
					
				</fieldset>
			</form>
			
			<?php if(!empty($id)) {?>
			<!-- dadosParticipante -->
			<div id="dadosParticipante">
				<h2>Dados do Participante:</h2>
				<div class="dados">
					<p>
						<strong>Nome:</strong> <?php echo $participante->getNome(); ?>
					</p>
					<p>
						<strong>Telefone:</strong> <?php echo $participante->getTelefone(); ?>
					</p>
					<p>
						<strong>Empresa:</strong>	<?php echo $participante->getEmpresa(); ?>
					</p>
				</div>		
			</div>
			
			<!-- dadosParticipante -->
			<div id="comentario">
				<h2>Comentário:</h2>
				<div class="dados">
					<p>
						<?php 
							echo ($participante->getComentario()) ? 
						    stripslashes($participante->getComentario()) : "&nbsp;";
						?>
					</p>
				</div>		
			</div>
			
			<!-- tabelas -->
			<div id="tabelas">
				
				<!-- tabela sobre os serviços da lobo e lobo -->
				<div id="tabela-servicos">
					<h2>Atendimento ao Telefone e Recepção:</h2>
					
					<table id="tab-servicos" class="report">
						<colgroup span="5">
							<col class="coluna-1" />
							<col class="coluna-2" />
						</colgroup>
						
						<thead>
							<tr>
								<th>&nbsp;</th>
								<th>Avaliação</th>
							</tr>
						</thead>
						
						<tbody>
							<tr class="alternada">
								<td class="questao">Pronto atendimento na solicitação de coletas</td>
								<td><?php echo $avaliacoes["item1"]; ?></td>
							</tr>
										
							<tr>
								<td class="questao">Comportamento e receptividade</td>
								<td><?php echo $avaliacoes["item2"]; ?></td>
							</tr>
							
							<tr class="alternada">
								<td class="questao">Prontidão e exatidão na transferência das ligações</td>
								<td><?php echo $avaliacoes["item3"]; ?></td>
							</tr>
							
							<tr>
								<td class="questao">Eficiência / solução imediata de problemas</td>
								<td><?php echo $avaliacoes["item4"]; ?></td>
							</tr>
							
							<tr class="alternada">
								<td class="questao">Precisão e confiabilidade nas informações prestadas</td>
								<td><?php echo $avaliacoes["item5"]; ?></td>
							</tr>
							
						</tbody>
					</table>
				</div>
				<!-- fim da div#tabela-servicos-->
				
				<!-- tabela de avaliação da satisfacao -->
				<div id="tabela-avaliacao">
					<h2>Rodoviário Nacional:</h2>
					
					<table id="tab-avaliacao" class="report">
						<colgroup span="5">
							<col class="coluna-1" />
							<col class="coluna-2" />
						</colgroup>
						
						<thead>
							<tr>
								<th>&nbsp;</th>
								<th>Avaliação</th>
							</tr>
						</thead>
						
						<tbody>
							<tr class="alternada">
								<td class="questao">Pronto atendimento na solicitação de coletas</td>
								<td><?php echo $avaliacoes["item6"]; ?></td>
							</tr>
							
							<tr>
								<td class="questao">Cuidados / eficiência no manuseio da carga</td>
								<td><?php echo $avaliacoes["item7"]; ?></td>
							</tr>
							
							<tr class="alternada">
								<td class="questao">Estado de conservação dos veículos</td>
								<td><?php echo $avaliacoes["item8"]; ?></td>
							</tr>
							
							<tr>
								<td class="questao">Apresentação dos funcionários</td>
								<td><?php echo $avaliacoes["item9"]; ?></td>
							</tr>
							
							<tr class="alternada">
								<td class="questao">Eficiência / solução imediata de problemas</td>
								<td><?php echo $avaliacoes["item10"]; ?></td>
							</tr>
							
							<tr>
								<td class="questao">Satisfação nos serviços prestados</td>
								<td><?php echo $avaliacoes["item11"]; ?></td>
							</tr>
							
						</tbody>
					</table>
					
				</div>
			</div>
			<?php } ?>
			
		</div>
	</div>
	
	<!-- footer -->
	<div id="footer">
		<p>Copyright© 2008 Transportadora Lobo e Lobo</p>
	</div>
		
</body>
</html>