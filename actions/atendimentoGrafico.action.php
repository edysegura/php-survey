<?php
session_start();

// Incluindo os objetos
include("../libs/jpgraph/jpgraph.php");
include("../libs/jpgraph/jpgraph_bar.php");

// Valores para o gráfico
$vo_notas = array (
	$_SESSION["p1-bom"], 
	$_SESSION["p1-regular"], 
	$_SESSION["p1-ruim"], 
	$_SESSION["p1-nao_utilizado"]
);
$vo_nomes = array("Bom", "Regular", "Ruim", utf8_decode("Não utilizado"));

// Cria um novo gráfico e ajusta os parametros básicos
$vo_graph = new Graph(375,200,'auto');
$vo_graph->img->SetMargin(40,30,40,25); // Left, Right, Top, Bottom
$vo_graph->SetScale("textint");
$vo_graph->SetFrame(false); // Não adiciona borda em volta do gráfico

// Labels da posição X
$vo_graph->xaxis->SetTickLabels($vo_nomes);
//$vo_graph->xaxis->SetLabelAngle(50);
//$vo_graph->xaxis->SetFont(FF_FONT2);

// Título do gráfico
$vo_graph->title->Set(utf8_decode("Atendimento ao Telefone e Recepção"));
$vo_graph->title->SetFont(FF_FONT2,FS_BOLD);
                              
// Cria as barras dos gráficos
$vo_bplot = new BarPlot($vo_notas);
$vo_bplot->SetFillColor("orange");
$vo_bplot->SetWidth(0.5);
$vo_bplot->SetShadow();

// Exibe os valores no topo das barras
$vo_bplot->value->Show();
// Must use TTF fonts if we want text at an arbitrary angle
$vo_bplot->value->SetFont(FF_FONT1,FS_BOLD);
//$vo_bplot->value->SetAngle(45);
// Cor preta para valores positivo e vermelho escuro para valores negativo
$vo_bplot->value->SetColor("black","darkred");
$vo_graph->Add($vo_bplot);

// Exibe o gráfico
$vo_graph->Stroke();
?>
