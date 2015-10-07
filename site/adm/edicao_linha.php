<?
include "../conectar.php";
include "sessao.php";
if($_POST){
	$id_query = mysql_query("UPDATE linhas SET 
							tit_linha = '{$_POST[tit_linha]}',
							ds_linha = '{$_POST[ds_linha]}'
							WHERE cd_linha = '{$_POST[cd]}'
							") or die(mysql_error());
	header("Location: gerenciador_linhas.php");
}else{
	$sql = ("SELECT * FROM linhas WHERE cd_linha = '{$_GET[cod]}'");
	$id_query = mysql_query($sql);
	$arr = mysql_fetch_assoc($id_query);
}
?><head>

<SCRIPT LANGUAGE="JavaScript" SRC="validadores.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">

function valida(theForm){

if (isBlank(theForm.tit_linha)) {
	alert("O campo Título está em branco");
	document.ed_linha.tit_linha.focus();
	return false;
}else if (isBlank(theForm.ds_linha)) {
	alert("O campo Descrição está em branco");
	document.ed_linha.ds_linha.focus();
	return false;
}else
	return true;
}
</SCRIPT>

<link rel="stylesheet" href="style.css" type="text/css">

</head>

<table align="center" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="edicao_linha.php" method="post" enctype="multipart/form-data" name="ed_linha" id="" ONSUBMIT="javascript:return valida(this)">
	<tr>
	<td><? include("menu.php") ?></td>
	</tr>
	<tr>
	<td align="left"><table width="100%" border="1" align="center" cellpadding="0" cellspacing="10">
	<tr align="center">
	<td colspan="2" align="center" class="style2"> Editar  LINHA de <b>Equipamentos</b></td>
	</tr>
	<tr>
	<td align="right" class="style1">Linha  :</td>
	<td><input name="tit_linha" type="text" value="<? echo($arr[tit_linha])?>" size="50" maxlength="100"></td>
	</tr>
	<tr>
	<td align="right" class="style1">Descritivo:</td>
	<td><textarea name="ds_linha" cols="65" rows="3" id="ds_linha"><? echo($arr[ds_linha])?></textarea></td>
    </tr>
	<tr>
	  <td colspan="2" align="center">
	    <input type="hidden" name="cd" value="<? echo($arr[cd_linha])?>">
	    <input type="submit" name="Submit" value="salvar">
	    </td>
	  </tr>
    </table>
	<hr align="left" noshade color="#000099">
    <span class="style1">Instru&ccedil;&otilde;es:</span><br>    <br>
	<span class="style1">Editar dados :</span> Alterar os campos desejados.<br>	<br>
	<span class="style1">Assim que tiver alterado todos os campos desejados clicar em &quot;Salvar&quot;</span>
	</td>
	</tr>
	</form>
</table>