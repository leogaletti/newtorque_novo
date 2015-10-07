<?
include "../conectar.php";
include("sessao.php");
if($_POST){
	$id_query = mysql_query("INSERT INTO linhas(ds_linha,tit_linha) VALUES('{$_POST[ds_linha]}','{$_POST[tit_linha]}')") or die(mysql_error());
	header("Location: gerenciador_linhas.php");
}

?><head>

<SCRIPT LANGUAGE="JavaScript" SRC="validadores.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">

function valida(theForm){

if (isBlank(theForm.tit_linha)) {
	alert("O campo Título está em branco");
	document.cad_linha.tit_linha.focus();
    return false;
}else if (isBlank(theForm.ds_linha)) {
    alert("O campo Descrição está em branco");
	document.cad_linha.ds_linha.focus();
    return false;
}else
	return true;
}

</SCRIPT>

<link rel="stylesheet" href="style.css" type="text/css">

</head>

<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="cadastro_linha.php" method="post" enctype="multipart/form-data" name="cad_linha" id="" ONSUBMIT="javascript:return valida(this)">
    <tr>
    <td><? include("menu.php") ?></td>
    </tr>
    <tr>
    <td align="center">
	<table width="100%" border="1" align="center" cellpadding="0" cellspacing="10">
	<tr>
	<td colspan="2" align="center" class="style2">Nova LINHA de <b>Equipamentos</b></td>
	</tr>
	<tr>
	<td align="right" class="style1">Linha : </td>
	<td><input name="tit_linha" type="text" size="51" maxlength="100"></td>
	</tr>
	<tr>
    <td align="right" class="style1">Descritivo:</td>
	<td><textarea name="ds_linha" cols="65" rows="3" id="ds_linha"></textarea></td>
	</tr>
	<tr> 
	  <td colspan="2" align="center"><input type="submit" name="Submit" value="Salvar"></td>
	  </tr>
    </table>
	<hr align="left" noshade color="#000099">
	<div align="left">Instru&ccedil;&otilde;es:<br><br>
	<span class="style1">Incluir dados :</span> Digitar os valores dos campos desejados.<br><br>
    <span class="style1">Assim que tiver alterado todos os campos desejados clicar em &quot;Salvar&quot;</span>
	</div>
	</td>
    </tr>
	</form>
</table>