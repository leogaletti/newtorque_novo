<?
include "../conectar.php";
include "sessao.php";
if($_POST){
	if(!empty($_POST[ds_data])){
		$ds_nova_data = substr($_POST[ds_data],6,4) ."-". substr($_POST[ds_data],3,2) ."-". substr($_POST[ds_data],0,2); 
	}
	$ds_link = $_POST[ds_link];
	$ds_link = str_replace('watch?v=', 'v/', $ds_link);
	$id_query = mysql_query("INSERT INTO videos(ds_local,ds_titulo,ds_link,ds_info,ds_data)
							 VALUES('{$_POST[ds_local]}','{$_POST[ds_titulo]}','{$ds_link}','{$_POST[ds_info]}','{$ds_nova_data}')") or die(mysql_error());
	header("Location: gerenciador_videos.php");
}

?><head>

<SCRIPT LANGUAGE="JavaScript" SRC="validadores.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">

function valida(theForm){

if (isBlank(theForm.ds_titulo)) {
	alert("O campo Título está em branco");
	document.cad_videos.ds_titulo.focus();
	return false;
}else
	return true;
}

</SCRIPT>

<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="cadastro_video.php" method="post" enctype="multipart/form-data" name="cad_videos" id="" ONSUBMIT="javascript:return valida(this)">
    <tr>
    <td><? include("menu.php") ?></td>
    </tr>
    <tr>
    <td><table width="100%" border="1" align="center" cellpadding="0" cellspacing="10">
	<tr>
	<td colspan="2" align="center" class="style2"> Novo V&Iacute;DEO</td>
	</tr>
	<tr>
      <td class="style1"> Data :</td>
      <td><input name="ds_data" type="text" id="ds_data" size="15" maxlength="10">
    (DD-MM-AAAA) </td>
	  </tr>
	<tr>
      <td class="style1"> T&iacute;tulo:</td>
      <td><input name="ds_titulo" type="text" id="ds_titulo" size="80" maxlength="200">
        <span class="style1">(*)</span></td>
	  </tr>
	<tr> 
    <td class="style1"> Local:</td>
    <td><input name="ds_local" type="text" id="ds_local" size="80" maxlength="200"></td>
	</tr>
	<tr>
      <td class="style1"> Link You Tube: (com http)</td>
      <td><input name="ds_link" type="text" id="ds_link" size="80" maxlength="200">
        <span class="style1">(*)</span></td>
	  </tr>
	<tr>
      <td class="style1"> Informa&ccedil;&otilde;es:</td>
      <td><textarea name="ds_info" cols="80" rows="3" id="ds_info"></textarea>
        <span class="style1">(*)</span></td>
	  </tr>
	<tr> 
	<td colspan="2" align="center"><input type="submit" name="Submit" value="Salvar"></td>
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