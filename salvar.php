<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$aero         = $_POST["aero"];
$prex         = $_POST["prex"];
$data         = "{$_POST["ano"]}-{$_POST["mes"]}-{$_POST["dia"]}";
$planot       = $_POST["planot"];
$divasp       = $_POST["divasp"];
$saida       = $_POST["saida"];
$destino    = $_POST["destino"];
$tempovo       = $_POST["tempovo"];
$altitude      = $_POST["altitude"];
$kts      = $_POST["kts"];
$altn     = $_POST["altn"];
$rota      = $_POST["rota"];
$combust      = $_POST["combust"];
$obs      = $_POST["obs"];
$login        = $_POST["login"];
$senha        = $_POST["senha"];
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
if(@mysql_query("INSERT INTO usuarios VALUES (	NULL , '$aero', '$prex', '$data',  '$planot', '$divasp', '$saida', '$destino', '$tempovo', '$altitude', '$kts', '$altn', '$rota', '$combust', '$obs', '$login', MD5( '$senha' ) )")) {

	if(mysql_affected_rows() == 1){
		echo "Registro efetuado com sucesso<br />";
	}	

} else {
	if(mysql_errno() == 1062) {
		echo $erros[mysql_errno()];
		exit;
	} else {	
		echo "Erro nao foi possivel efetuar o cadastro";
		exit;
	}	
	@mysql_close();
}

}
?>
<a href="index.html">Voltar</a>