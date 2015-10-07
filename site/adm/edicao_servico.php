<?
include "../conectar.php";
include "sessao.php";
include "../fckeditor/fckeditor.php"; //Chama a classe fckeditor
if($_POST){
	$id_query = mysql_query("UPDATE servicos SET 
							tit_servico = '{$_POST[tit_servico]}',
							ds_servico = '{$_POST[ds_servico]}'
							WHERE cd_servico = '{$_POST[cd]}'
							") or die(mysql_error());
	header("Location: gerenciador_servicos.php");
}else{
	$sql = ("SELECT * FROM servicos WHERE cd_servico = '{$_GET[cod]}'");
	$id_query = mysql_query($sql);
	$arr = mysql_fetch_assoc($id_query);
}
?><head>

<script type="text/javascript" src="../fckeditor/fckeditor.js"></script>
<SCRIPT LANGUAGE="JavaScript" SRC="validadores.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">

function valida(theForm){

if (isBlank(theForm.tit_servico)) {
	alert("O campo Título está em branco");
	document.ed_servico.tit_servico.focus();
	return false;
}else if (isBlank(theForm.ds_servico)) {
	alert("O campo Descrição está em branco");
	document.ed_servico.ds_servico.focus();
	return false;
}else
	return true;
}
</SCRIPT>

<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<form action="edicao_servico.php" method="post" enctype="multipart/form-data" name="ed_servico" id="" ONSUBMIT="javascript:return valida(this)">
	<tr>
	<td><? include("menu.php") ?></td>
	</tr>
	<tr>
	<td align="left"><table width="100%" border="1" align="center" cellpadding="0" cellspacing="10" class="style1">
	<tr align="center">
	<td colspan="2" align="center" class="style2"> Editar  SERVI&Ccedil;O</td>
	</tr>
	<tr>
	<td align="right">Servi&ccedil;o:</td>
	<td><input name="tit_servico" type="text" value="<? echo($arr[tit_servico])?>" size="50" maxlength="100"></td>
	</tr>
	<tr>
	<td align="right" class="style1">Descritivo :</td>
	<td align="left" class="style1">&nbsp;</td>
	</tr>
	<tr>
	<td colspan="2" align="left">
<? 
$editor = new FCKeditor("ds_servico"); //Nomeia a área de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = $arr[ds_servico];             //Informa o valor inicial do campo, no exemplo está vazio 
$editor-> Width = "95%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?>
	</td>
    </tr>
	<tr>
	<td colspan="2" align="center">
	<input type="hidden" name="cd" value="<? echo($arr[cd_servico])?>">
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