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
?>
<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	
<!-- Mirrored from www.cliptheme.com/preview/admin/clip-one/login_example2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Sep 2015 23:54:57 GMT -->
<head>
		<title>Vasp Login </title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="assets/css/main.css">
		
        <!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login example2">
		<div class="main-login col-sm-4 col-sm-offset-4">
			<div class="logo"><img src="http://vasp.zz.vc/501px-VASP_logo.svg.png" width="200" height="60
                        ">
<style type="text/css">
       body {font-family: 'Khand', sans-serif;}
table {
	width: 1200px;
	border-collapse:collapse;
	border:2px solid #40788E;
</style>
<style>
<!--
.textBox { border:1px solid gray;}
-->
</style>
</head>
<body>
<h1>Plano de Voo</h1>
________________________________________________________________________________________________
<br>
    <br>
<a href="index.html"><img src="images/voltar.png"></a>
</body>
<br>
<br>
<body>
<form id="form1" name="form1" method="post" action="salvar.php">
</table>
    <tr>
 </tr>
  <br>
   <td>Data Atual</td>
		<?php			
			echo monta_select("dia", 1, 31);	
			echo monta_select("mes", 1, 12);	
			echo monta_select("ano", 2015, 2016);
		?>	
	</td>
    </br>
  <table width="400" border="1" align="center">
    <tr>
      <td>Aeronave</td>
      <td><select name="aero" id="aero">
        <option>Piper Seneca</option>
        <option>Bonanza V35</option>
        <option>Baron 55</option>
        <option>Piper Navajo</option>
      </select>
     </td>
      </br>
      <td>Prefixo</td>
      <td><input name="prex" type="text" class="textBox" id="prex" size="6" maxlength="6"/> </td>
    </tr>
     </select>      </td>
    </tr>
    <tr>
      <br>
      <br>
      <td>Tipo de Plano</td>
      <td><select name="planot" id="planot">
        <option>VFR</option>
        <option>IFR</option>
      </select>
     </td>
      <td>Divisão VASP</td>
      <td><select name="divasp" id="divasp">
        <option>VASP</option>
        <option>VASPEX</option>
        <option>APEX Taxi Aereo</option>
      </select>
     </td>
     </table>
    <br>
              
     <table width="400" border="0" align="center">        
     
      <td>Saida</td>
      <td><input name="saida" type="text" class="textBox" id="saida" size="6" maxlength="40" /></td>

      <td>Destino</td>
      <td><input name="destino" type="text" class="textBox" id="destino" size="6" maxlength="40" /></td>
    </tr>
      <td>FL</td>
      <td><input name="altitude" type="text" class="textBox" id="altitude" size="6" maxlength="40" /></td>
      <td>KTS</td>
      <td><input name="kts" type="text" class="textBox" id="kts" size="6" maxlength="40" /></td>
   </tr>

      <td>Alternativo</td>
      <td><input name="altn" type="text" class="textBox" id="altn" size="6" maxlength="40" /></td>
      
      <td>Rota</td>
      <td><textarea name="rota" class="textBox" id="rota"></textarea></td>
       </tr>

      <td>Combustivel</td>
      <td><input name="combust" type="text" class="textBox" id="combust" size="6" maxlength="40" /></td>
   <tr>

   <td>Tempo em Voo</td>
      <td><input name="tempovo" type="text" class="textBox" id="tempovo" size="6" maxlength="40" /></td>

      <td>OBS</td>
      <td><textarea name="obs" class="textBox" id="obs"></textarea></td>
</table>
 <br>
 <table width="600" border="0" align="center">

      <td>Login</td>
      <td><input name="login" type="text" id="login" maxlength="40" class="textBox" /></td>

      <td>Senha</td>
      <td><input name="senha" type="password" id="senha" maxlength="10" class="textBox" /></td>
            <td>&nbsp;</td>
      <td> <br><input type="submit" name="Submit" value="Salvar" style="cursor:pointer;" /></br></td>
      </table>
   
</form>
</br>
</br>
</body>
</html>