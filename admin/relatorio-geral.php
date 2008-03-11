<?php include "../actions/validation.action.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="WebEngineers" />
<meta name="reply-to" content="contato@webengineers.com.br" />
<title>Transportadora LOBO e LOBO - Pesquisa de Satisfa��o dos Clientes</title>

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

<h1 id="title-admin">Resultado Geral da Pesquisa</h1>

<!-- formul�rio -->
<form id="pesquisa" method="post" action="paginas/confirmacao.html">
	
	<div id="form-content">
		
		<!-- tabela sobre os servi�os da lobo e lobo -->
		<div id="tabela-servicos">
			<h2>Atendimento ao Telefone e Recep��o:</h2>
						
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
						<th>N�o Utilizado</th>
					</tr>
				</thead>
				<tbody>
					<tr class="alternada">
						<td class="questao">Pronto atendimento na solicita��o de coletas</td>
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
						<td class="questao">Prontid�o e exatid�o na transfer�ncia das liga��es</td>
						<td><?php echo $totalVotos["item3"][1]; ?></td>
						<td><?php echo $totalVotos["item3"][2]; ?></td>
						<td><?php echo $totalVotos["item3"][3]; ?></td>
						<td><?php echo $totalVotos["item3"][4]; ?></td>	
					</tr>
					
					<tr>
						<td class="questao">Efici�ncia / solu��o imediata de problemas</td>
						<td><?php echo $totalVotos["item4"][1]; ?></td>
						<td><?php echo $totalVotos["item4"][2]; ?></td>
						<td><?php echo $totalVotos["item4"][3]; ?></td>
						<td><?php echo $totalVotos["item4"][4]; ?></td>	
					</tr>
					
					<tr class="alternada">
						<td class="questao">Precis�o e confiabilidade nas informa��es prestadas</td>
						<td><?php echo $totalVotos["item5"][1]; ?></td>
						<td><?php echo $totalVotos["item5"][2]; ?></td>
						<td><?php echo $totalVotos["item5"][3]; ?></td>
						<td><?php echo $totalVotos["item5"][4]; ?></td>	
					</tr>
					
					<tr class="total">
						<td class="questao">Total</td>
						<td>xxx</td>
						<td>xxx</td>
						<td>xxx</td>
						<td>xxx</td>
					</tr>
					
				</tbody>
			</table>
		</div>
		<!-- fim da div#tabela-servicos-->
				
		<!-- tabela de avalia��o da satisfacao -->
		<div id="tabela-avaliacao">
			<h2>Rodovi�rio Nacional:</h2>
			
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
						<th>N�o Utilizado</th>
					</tr>
				</thead>
				
				<tbody>
					<tr class="alternada">
						<td class="questao">Pronto atendimento na solicita��o de coletas</td>
						<td><?php echo $totalVotos["item1"][1]; ?></td>
						<td><?php echo $totalVotos["item1"][2]; ?></td>
						<td><?php echo $totalVotos["item1"][3]; ?></td>
						<td><?php echo $totalVotos["item1"][4]; ?></td>	
					</tr>
					
					<tr>
						<td class="questao">Cuidados / efici�ncia no manuseio da carga</td>
						<td>56</td>
						<td>77</td>
						<td>31</td>
						<td>20</td>
					</tr>
					
					<tr class="alternada">
						<td class="questao">Estado de conserva��o dos ve�culos</td>
						<td>12</td>
						<td>12</td>
						<td>34</td>
						<td>55</td>
					</tr>
					
					<tr>
						<td class="questao">Apresenta��o dos funcion�rios</td>
						<td>56</td>
						<td>77</td>
						<td>31</td>
						<td>10</td>
					</tr>
					
					<tr class="alternada">
						<td class="questao">Efici�ncia / solu��o imediata de problemas</td>
						<td>12</td>
						<td>12</td>
						<td>34</td>
						<td>55</td>
					</tr>
					
					<tr>
						<td class="questao">Satisfa��o nos servi�os prestados</td>
						<td>56</td>
						<td>77</td>
						<td>31</td>
						<td>30</td>
					</tr>
					
					<tr class="alternada total">
						<td class="questao">Total</td>
						<td>xxx</td>
						<td>xxx</td>
						<td>xxx</td>
						<td>xxx</td>
					</tr>
					
				</tbody>
			</table>

		</div>
		<!-- fim da tabela avaliacao -->
		
		<p class="link"><a href="<?php echo $baseUrl; ?>/actions/logout.action.php">Sair</a></p>
		
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
