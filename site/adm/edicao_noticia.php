<?
include "../conectar.php";
include "sessao.php";
include "../fckeditor/fckeditor.php"; //Chama a classe fckeditor
if($_POST){
 	$id_query = mysql_query("UPDATE noticias SET tit_noticia = '{$_POST[tit_noticia]}',
 							ds_noticia = '{$_POST[ds_noticia]}',
							ds_fonte = '{$_POST[ds_fonte]}'
 							WHERE cd_noticia = '{$_POST[cd]}'
 							") or die(mysql_error());
 	header("Location: gerenciador_noticias.php");
}else{
 	$sql ="SELECT * FROM noticias WHERE cd_noticia = '{$_GET[cod]}'";
 	$id_query = mysql_query($sql);
 	$arr = mysql_fetch_assoc($id_query);
}

?><head>

<script type="text/javascript" src="../fckeditor/fckeditor.js"></script>
<SCRIPT LANGUAGE="JavaScript" SRC="validadores.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">

function valida(theForm){

if (isBlank(theForm.tit_noticia)) {
	alert("O campo Título está em branco");
	document.ed_noticias.tit_noticia.focus();
	return false;
}else
	 return true;
}

</SCRIPT>

<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<table align="center" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="edicao_noticia.php" method="post" enctype="multipart/form-data" name="ed_noticias" id="" ONSUBMIT="javascript:return valida(this)">
	<tr>
	<td><? include("menu.php") ?></td>
	</tr>
	<tr>
	<td align="center">
	  <table width="100%" border="1" align="center" cellpadding="0" cellspacing="10" class="style1">
        <tr align="center">
          <td colspan="2" align="center" class="style2">Editar a NOT&Iacute;CIA</td>
        </tr>
        <tr>
          <td> T&iacute;tulo:</td>
          <td><input name="tit_noticia" type="text" id="tit_noticia" value="<? echo($arr[tit_noticia])?>" size="80" maxlength="100" />
            (*)</td>
        </tr>
        <tr>
          <td width="151"> Fonte:</td>
          <td><input name="ds_fonte" type="text" id="ds_fonte" value="<? echo($arr[ds_fonte])?>" size="100" maxlength="256"></td>
        </tr>
        <tr>
          <td colspan="2">Not&iacute;cia Completa:(*)</td>
        </tr>
        <tr>
          <td colspan="2"><? 
$editor = new FCKeditor("ds_noticia"); //Nomeia a &aacute;rea de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = $arr[ds_noticia];             //Informa o valor inicial do campo, no exemplo est&aacute; vazio 
$editor-> Width = "100%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?></td>
        </tr>
        <tr align="center">
          <td colspan="2">
            <input type="hidden" name="cd" value="<? echo($arr[cd_noticia])?>">
            <input type="submit" name="Submit" value="salvar">
            </td>
        </tr>
      </table>
	<div align="left">
	  <hr noshade="noshade" color="#000099" />
      <span class="style1">(*)</span> preenchimento obrigat&oacute;rio <br />
	</div>
	</td>
	</tr>
	</form>
</table>