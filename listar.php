<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Plano de Voos</title>
<link href='https://fonts.googleapis.com/css?family=Khand:400,500' rel='stylesheet' type='text/css'>
<style type="text/css">
       body {font-family: 'Khand', sans-serif;}
table {
	width: 1200px;
	border-collapse:collapse;
	border:2px solid #C4EEFE;
</style>
<style>
<!--
.textBox { border:1px solid gray;}
-->
</style>
<body background="sky_bg.jpg">
</head>
<body>
<h1>Cadastros</h1>
</body>
<a href="index.html">Voltar</a>
<?php
if(file_exists("init.php")) {
	require "init.php";		
} else {
	echo "Arquivo init.php nao foi encontrado";
	exit;
}

if(!function_exists("Abre_Conexao")) {
	echo "Erro o arquivo init.php foi auterado, nao existe a função Abre_Conexao";
	exit;
}
Abre_Conexao();
$re = mysql_query("SELECT * FROM usuarios;");
if(mysql_errno() != 0) {
	if(!isset($erros)) {
		echo "Erro o arquivo init.php foi auterado, nao existe $erros";
		exit;
	}
	echo $erros[mysql_errno()];
	exit;
}

?>

<table width="200%" border="1">
	<tr>
		<td width="10%">Ações</td>	
        <td width="10%">Divisão</td>
        <td width="10%">Prefixo</td>
		<td width="10%">Plano</td>
        <td width="10%">Aeronave</td>
		<td width="10%">Data</td>
		<td width="10%">Saida</td>
		<td width="10%">Destino</td>
		<td width="10%">Rota</td>
        <td width="10%">Alternativo</td>
        <td width="10%">Duração</td>
		<td width="10%">Combustivel</td>
        <td width="10%">Login</td>
	</tr>
<?php
    while($l = mysql_fetch_array($re)) {
	$id          = $l["id_usuario"];
	$divasp      = $l ["divasp"];
	$prex       = $l["prex"];
    $planot       = $l["planot"];
	$aero       = $l["aero"];
	$data        = implode("/", array_reverse(explode("-", $l["data_nascimento"])));
	$saida       = $l["saida"];
	$destino     = $l["destino"];
	$rota       = $l["rota"];
    $altn       = $l["altn"];
	$tempovo     = $l["tempovo"];
	$combust       = $l["combust"];
	$login       = $l["login"];

echo "
	<tr>
		<td><a href=\"editar.php?id=$id\">[Editar]</a> <a href=\"excluir.php?id=$id\">[Excluir]</a></td>
		<td>&nbsp;$divasp</td>		
		<td>&nbsp;$prex</td>
		<td>&nbsp;$planot</td>
		<td>&nbsp;$aero</td>
		<td>&nbsp;$data</td>
		<td>&nbsp;$saida</td>
		<td>&nbsp;$destino</td>
		<td>&nbsp;$rota</td>
		<td>&nbsp;$altn</td>
		<td>&nbsp;$tempovo</td>
		<td>&nbsp;$combust</td>
		<td>&nbsp;$login</td>
	</tr>\n";
}
@mysql_close();
?>	
</table>