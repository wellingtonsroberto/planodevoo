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
$id = $_GET["id"];

Abre_Conexao();
$re    = mysql_query("select count(*) as total from usuarios where id_usuario = $id");	
$total = mysql_result($re, 0, "total");

if($total == 1) {
	$re = mysql_query("SELECT * FROM usuarios where id_usuario = $id");
	$dados = mysql_fetch_array($re);		
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro</title>
<style>
<!--
.textBox { border:1px solid gray; width:200px;} 
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="salvar_edicao.php">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
 </table>
    <tr>
 </tr>
  <table width="400" border="0" align="center">
    <tr>
    <td>Aeronave</td>
      <td><select name="aero" id="aero" value="<?php echo $dados["aero"]; ?>"/>
        <option>Piper Seneca</option>
        <option>Bonanza V35</option>
        <option>Baron 55</option>
      </select>
     </td>
    </tr>
    <tr>
      <td>Prefixo</td>
      <td><input name="prex" type="text" id="prex" maxlength="64" class="textBox" value="<?php echo $dados["prex"]; ?>" /></td>
    </tr>
    <tr>
      <td>Data</td>
      <td>
		<?php			
			$arr = explode("-", $dados["data_nascimento"]);
			
			echo Seleciona_Item($arr[2], monta_select("dia", 1, 31));	
			echo Seleciona_Item($arr[1], monta_select("mes", 1, 12));	
			echo Seleciona_Item($arr[0], monta_select("ano", 1940, 1988));	
		?>	
	</td>
    </tr>
    <tr>
      <td>Tipo de Plano</td>
      <td><select name="planot" id="planot" value="<?php echo $dados["planot"]; ?>"/>
        <option>VFR</option>
        <option>IFR</option>
       </select> </td>
   </tr>
    <tr>
      <td>Divisão VASP</td>
      <td><select name="divasp" id="divasp" value="<?php echo $dados["divasp"]; ?>"/>
        <option>VASP</option>
        <option>VASPEX</option>
        <option>APEX Taxi Aereo</option>
       </select> </td>
   </tr>
     <tr>
      <td>Saida</td>
      <td><input name="saida" type="text" id="saida" maxlength="64" class="textBox" value="<?php echo $dados["saida"]; ?>" /></td>
    </tr>
    <tr>
      <td>Destino</td>
      <td><input name="destino" type="text" id="destino" maxlength="64" class="textBox" value="<?php echo $dados["destino"]; ?>" /></td>
    </tr>
    <tr>
      <td>Tempo em Voo</td>
      <td><input name="tempovo" type="text" id="tempovo" maxlength="64" class="textBox" value="<?php echo $dados["tempovo"]; ?>" /></td>
    </tr>
   <tr>
      <td>FL</td>
      <td><input name="altitude" type="text" id="altitude" maxlength="64" class="textBox" value="<?php echo $dados["altitude"]; ?>" /></td>
    </tr>
    <tr>
      <td>KTS</td>
      <td><input name="kts" type="text" id="kts" maxlength="64" class="textBox" value="<?php echo $dados["kts"]; ?>" /></td>
    </tr>
    <tr>
      <td>Alternativo</td>
      <td><input name="altn" type="text" id="altn" maxlength="64" class="textBox" value="<?php echo $dados["altn"]; ?>" /></td>
    </tr>
   <tr>
      <td>Rota</td>
      <td><input name="rota" type="text" id="rota" maxlength="64" class="textBox" value="<?php echo $dados["rota"]; ?>" /></td>
    </tr>
    <tr>
      <td>Combustivel</td>
      <td><input name="combust" type="text" id="combust" maxlength="64" class="textBox" value="<?php echo $dados["combust"]; ?>" /></td>
    </tr>
    <tr>
      <td>OBS</td>
      <td><input name="obs" type="text" id="obs" maxlength="64" class="textBox" value="<?php echo $dados["obs"]; ?>" /></td>
    </tr>
    <tr>
      <td>Login</td>
      <td><input name="login" type="text" id="login" maxlength="40" class="textBox" value="<?php echo $dados["login"]; ?>" /> 
      </td>
    </tr>
    <tr>
      <td>Senha</td>
      <td><input name="senha" type="password" id="senha" maxlength="10" class="textBox" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Salvar" style="cursor:pointer;" /></td>
    </tr>
  </table>
</form>
</body>
</html>
