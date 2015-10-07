<?
include "../conectar.php";
include "sessao.php";
include "../fckeditor/fckeditor.php"; //Chama a classe fckeditor
if($_POST){
	$id_query = mysql_query("INSERT INTO servicos_executados(ds_servico_executado,tit_servico_executado) VALUES('{$_POST[ds_servico_executado]}','{$_POST[tit_servico_executado]}')") or die(mysql_error());
	header("Location: gerenciador_servicos_executados.php");
}

?><head>

<script type="text/javascript" src="../fckeditor/fckeditor.js"></script>
<SCRIPT LANGUAGE="JavaScript" SRC="validadores.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">

function valida(theForm){

if (isBlank(theForm.tit_servico)) {
	alert("O campo Título está em branco");
	document.cad_servico.tit_servico.focus();
    return false;
}else if (isBlank(theForm.ds_servico)) {
    alert("O campo Descrição está em branco");
	document.cad_servico.ds_servico.focus();
    return false;
}else
	return true;
}

</SCRIPT>

<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>##  &Aacute;rea Administrativa do site - &Aacute;gilis Academia ##</title>
</head>

<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="cadastro_servico_executado.php" method="post" enctype="multipart/form-data" name="cad_servico" id="" ONSUBMIT="javascript:return valida(this)">
    <tr>
    <td><? include("menu.php") ?></td>
    </tr>
    <tr>
    <td align="center">
	<table width="100%" border="1" align="center" cellpadding="0" cellspacing="10" class="style1">
	<tr>
	<td colspan="2" align="center" class="style2">Novo TIPO de SERVI&Ccedil;O</td>
	</tr>
	<td align="right">Servi&ccedil;o:</td>
	<td><input name="tit_servico_executado" type="text" size="51" maxlength="100"></td>
	</tr>
	<tr>
    <td align="right">Descritivo :</td>
    <td align="left">&nbsp;</td>
	</tr>
	<tr>
	<td colspan="2">
<? 
$editor = new FCKeditor("ds_servico_executado"); //Nomeia a &aacute;rea de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = "";             //Informa o valor inicial do campo, no exemplo est&aacute; vazio 
$editor-> Width = "95%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?>
	</td>
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