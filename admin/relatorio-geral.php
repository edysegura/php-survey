<?php include "../actions/validation.action.php"; ?>
<?php include "$baseDir/actions/relatorioGeral.action.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="WebEngineers" />
<meta name="reply-to" content="contato@webengineers.com.br" />
<title>Transportadora LOBO e LOBO - Pesquisa de Satisfação dos Clientes</title>

<!-- stylesheet -->
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/index.css" type="text/css" title="Lobo e Lobo" />

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

<p class="link"><a href="relatorio-detalhado.php">Relatório Detalhado</a> | <a href="<?php echo $baseUrl; ?>/actions/logout.action.php">Sair</a></p>

<h1 id="title-admin">Resultado Geral da Pesquisa</h1>
		
<!-- formulário -->
<form id="pesquisa" method="post" action="paginas/confirmacao.html">
	
	<div id="form-content">
		
		<!-- tabela sobre os serviços da lobo e lobo -->
		<div id="tabela-servicos">
			<h2>Atendimento ao Telefone e Recepção:</h2>
						
			<table id="tab-servicos" class="report">
				<colgroup span="5">
					<col class="coluna-1" />
					<col class="coluna-2" />
					<col class="coluna-3" />
					<col class="coluna-4" />
					<col class="coluna-5" />
				</colgroup>
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>Bom</th>
						<th>Regular</th>
						<th>Ruim</th>
						<th>Não Utilizado</th>
					</tr>
				</thead>
				<tbody>
					<tr class="alternada">
						<td class="questao">Pronto atendimento na solicitação de coletas</td>
						<td><?php echo $totalVotos["item1"][1]; ?></td>
						<td><?php echo $totalVotos["item1"][2]; ?></td>
						<td><?php echo $totalVotos["item1"][3]; ?></td>
						<td><?php echo $totalVotos["item1"][4]; ?></td>	
					</tr>
		            
					<tr>
						<td class="questao">Comportamento e receptividade</td>
						<td><?php echo $totalVotos["item2"][1]; ?></td>
						<td><?php echo $totalVotos["item2"][2]; ?></td>
						<td><?php echo $totalVotos["item2"][3]; ?></td>
						<td><?php echo $totalVotos["item2"][4]; ?></td>	
					</tr>
					
					<tr class="alternada">
						<td class="questao">Prontidão e exatidão na transferência das ligações</td>
						<td><?php echo $totalVotos["item3"][1]; ?></td>
						<td><?php echo $totalVotos["item3"][2]; ?></td>
						<td><?php echo $totalVotos["item3"][3]; ?></td>
						<td><?php echo $totalVotos["item3"][4]; ?></td>	
					</tr>
					
					<tr>
						<td class="questao">Eficiência / solução imediata de problemas</td>
						<td><?php echo $totalVotos["item4"][1]; ?></td>
						<td><?php echo $totalVotos["item4"][2]; ?></td>
						<td><?php echo $totalVotos["item4"][3]; ?></td>
						<td><?php echo $totalVotos["item4"][4]; ?></td>	
					</tr>
					
					<tr class="alternada">
						<td class="questao">Precisão e confiabilidade nas informações prestadas</td>
						<td><?php echo $totalVotos["item5"][1]; ?></td>
						<td><?php echo $totalVotos["item5"][2]; ?></td>
						<td><?php echo $totalVotos["item5"][3]; ?></td>
						<td><?php echo $totalVotos["item5"][4]; ?></td>	
					</tr>
					
					<tr class="total">
						<td class="questao">Total</td>
						<td><?php echo $totalPesquisa1["bom"]; ?></td>
						<td><?php echo $totalPesquisa1["regular"]; ?></td>
						<td><?php echo $totalPesquisa1["ruim"]; ?></td>
						<td><?php echo $totalPesquisa1["nao_utilizado"]; ?></td>
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
					<col class="coluna-3" />
					<col class="coluna-4" />
					<col class="coluna-5" />
				</colgroup>
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>Bom</th>
						<th>Regular</th>
						<th>Ruim</th>
						<th>Não Utilizado</th>
					</tr>
				</thead>
				
				<tbody>
					<tr class="alternada">
						<td class="questao">Pronto atendimento na solicitação de coletas</td>
						<td><?php echo $totalVotos["item6"][1]; ?></td>
						<td><?php echo $totalVotos["item6"][2]; ?></td>
						<td><?php echo $totalVotos["item6"][3]; ?></td>
						<td><?php echo $totalVotos["item6"][4]; ?></td>	
					</tr>
					
					<tr>
						<td class="questao">Cuidados / eficiência no manuseio da carga</td>
						<td><?php echo $totalVotos["item7"][1]; ?></td>
						<td><?php echo $totalVotos["item7"][2]; ?></td>
						<td><?php echo $totalVotos["item7"][3]; ?></td>
						<td><?php echo $totalVotos["item7"][4]; ?></td>	
					</tr>
					
					<tr class="alternada">
						<td class="questao">Estado de conservação dos veículos</td>
						<td><?php echo $totalVotos["item8"][1]; ?></td>
						<td><?php echo $totalVotos["item8"][2]; ?></td>
						<td><?php echo $totalVotos["item8"][3]; ?></td>
						<td><?php echo $totalVotos["item8"][4]; ?></td>	
					</tr>
					
					<tr>
						<td class="questao">Apresentação dos funcionários</td>
						<td><?php echo $totalVotos["item9"][1]; ?></td>
						<td><?php echo $totalVotos["item9"][2]; ?></td>
						<td><?php echo $totalVotos["item9"][3]; ?></td>
						<td><?php echo $totalVotos["item9"][4]; ?></td>	
					</tr>
					
					<tr class="alternada">
						<td class="questao">Eficiência / solução imediata de problemas</td>
						<td><?php echo $totalVotos["item10"][1]; ?></td>
						<td><?php echo $totalVotos["item10"][2]; ?></td>
						<td><?php echo $totalVotos["item10"][3]; ?></td>
						<td><?php echo $totalVotos["item10"][4]; ?></td>	
					</tr>
					
					<tr>
						<td class="questao">Satisfação nos serviços prestados</td>
						<td><?php echo $totalVotos["item11"][1]; ?></td>
						<td><?php echo $totalVotos["item11"][2]; ?></td>
						<td><?php echo $totalVotos["item11"][3]; ?></td>
						<td><?php echo $totalVotos["item11"][4]; ?></td>	
					</tr>
					
					<tr class="alternada total">
						<td class="questao">Total</td>
						<td><?php echo $totalPesquisa2["bom"]; ?></td>
						<td><?php echo $totalPesquisa2["regular"]; ?></td>
						<td><?php echo $totalPesquisa2["ruim"]; ?></td>
						<td><?php echo $totalPesquisa2["nao_utilizado"]; ?></td>
					</tr>
					
				</tbody>
			</table>

		</div>
		<!-- fim da tabela avaliacao -->
		
		<!-- fim div#form-content -->
	</div>
</form>

	<!-- final da div#content -->
</div>

<!-- footer -->
<div id="footer">
</div>

<!-- fim div#global -->
</div>
</body>
</html>
