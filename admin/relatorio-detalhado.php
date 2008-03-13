<?php 
	include "../actions/validation.action.php";
	include "$baseDir/actions/relatorioGeral.action.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="WebEngineers" />
<meta name="reply-to" content="contato@webengineers.com.br" />
<title>Transportadora LOBO e LOBO - Pesquisa de Satisfação dos Clientes</title>

<!-- stylesheet -->
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/loboelobo/relatorio-detalhado.css" type="text/css" title="Lobo e Lobo" />

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
			
			<p class="link"><a href="relatorio-geral.php">Relatório Geral</a> | <a href="<?php echo $baseUrl; ?>/actions/logout.action.php">Sair</a></p>
			
			<h1 id="title-admin">Resultado Detalhado da Pesquisa</h1>
			
			<form class="filter">
				<fieldset>
					<legend>Filtro</legend>
					
					<p title="Nome do Participante">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" maxlength="100" />
					</p>
					<p title="E-mail do Participante">
						<label for="emailParticipante">E-mail:</label>
						<select name="emailParticipante" id="emailParticipante">
							<option value="">[...]</option>
							<option value="1">lidy@lidy.com.br</option>
							<option value="2">edy@segura.eti.br</option>
						</select>
					</p>
					<p title="Empresa">
						<label for="empresa">Empresa:</label>
						<input type="text" name="empresa" id="empresa" maxlength="100" />
					</p>
					
					<div class="botoes">
						<input type="submit" value="Filtrar" />
					</div>
					
				</fieldset>
			</form>
			
			<!-- dadosParticipante -->
			<div id="dadosParticipante">
				<h2>Dados do Participante</h2>
				<div class="dados">
					<p>
						<label for="nome">Nome:</label>
						<input type="text" name="nome" readonly="readonly" id="nome" value="Nome" maxlength="100" />
					</p>
					<p>
						<label for="telefone">Telefone:</label>
						<input type="text" name="telefone" readonly="readonly" id="telefone" value="(35)3425-5858" maxlength="14" />
					</p>
					<p>
						<label for="empresa">Empresa:</label>
						<input type="text" name="empresa" readonly="readonly" id="empresa" value="Teste" maxlength="100" />
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
								<td><?php echo $participantes["item1"][1]; ?></td>
							</tr>
										
							<tr>
								<td class="questao">Comportamento e receptividade</td>
								<td><?php echo $participantes["item2"][1]; ?></td>
							</tr>
							
							<tr class="alternada">
								<td class="questao">Prontidão e exatidão na transferência das ligações</td>
								<td><?php echo $participantes["item3"][1]; ?></td>
							</tr>
							
							<tr>
								<td class="questao">Eficiência / solução imediata de problemas</td>
								<td><?php echo $participantes["item4"][1]; ?></td>
							</tr>
							
							<tr class="alternada">
								<td class="questao">Precisão e confiabilidade nas informações prestadas</td>
								<td><?php echo $participantes["item5"][1]; ?></td>
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
								<td><?php echo $participantes["item6"][1]; ?></td>
							</tr>
							
							<tr>
								<td class="questao">Cuidados / eficiência no manuseio da carga</td>
								<td><?php echo $participantes["item7"][1]; ?></td>
							</tr>
							
							<tr class="alternada">
								<td class="questao">Estado de conservação dos veículos</td>
								<td><?php echo $participantes["item8"][1]; ?></td>
							</tr>
							
							<tr>
								<td class="questao">Apresentação dos funcionários</td>
								<td><?php echo $participantes["item9"][1]; ?></td>
							</tr>
							
							<tr class="alternada">
								<td class="questao">Eficiência / solução imediata de problemas</td>
								<td><?php echo $participantes["item10"][1]; ?></td>
							</tr>
							
							<tr>
								<td class="questao">Satisfação nos serviços prestados</td>
								<td><?php echo $participantes["item11"][1]; ?></td>
							</tr>
							
						</tbody>
					</table>
					
				</div>
				<!-- fim div#form-content -->
			</div>
			<!-- final da div#content -->
		</div>
		
		<!-- footer -->
		<div id="footer"></div>
	</div>

</body>
</html>