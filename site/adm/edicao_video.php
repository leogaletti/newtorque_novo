<?
include "../conectar.php";
include "sessao.php";
if($_POST){
	if(!empty($_POST[ds_data])){
		$ds_nova_data = substr($_POST[ds_data],6,4) ."-". substr($_POST[ds_data],3,2) ."-". substr($_POST[ds_data],0,2); 
	}
	$ds_link = $_POST[ds_link];
	$ds_link = str_replace('watch?v=', 'v/', $ds_link);
 	$id_query = mysql_query("UPDATE videos SET ds_local = '{$_POST[ds_local]}',
 							ds_titulo = '{$_POST[ds_titulo]}',
 							ds_link = '{$ds_link}',
 							ds_info = '{$_POST[ds_info]}',
							ds_data = '{$ds_nova_data}'
 							WHERE cd_video = '{$_POST[cd]}'
 							") or die(mysql_error());
 	header("Location: gerenciador_videos.php");
}else{
 	$sql ="SELECT * FROM videos WHERE cd_video = '{$_GET[cod]}'";
 	$id_query = mysql_query($sql);
 	$arr = mysql_fetch_assoc($id_query);
	if(!empty($arr[ds_data])){
		$novadata = substr($arr[ds_data],8,2) ."-". substr($arr[ds_data],5,2) ."-". substr($arr[ds_data],0,4); 
	}
}

?><head>

<SCRIPT LANGUAGE="JavaScript" SRC="validadores.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">

function valida(theForm){

if (isBlank(theForm.ds_titulo)) {
	alert("O campo Título está em branco");
	document.ed_videos.ds_titulo.focus();
	return false;
}else
	 return true;
}

</SCRIPT>

<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>



<table align="center" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="edicao_video.php" method="post" enctype="multipart/form-data" name="ed_videos" id="" ONSUBMIT="javascript:return valida(this)">
	<tr>
	<td><? include("menu.php") ?></td>
	</tr>
	<tr>
	<td>
	<table width="100%" border="1" align="center" cellpadding="0" cellspacing="10">
	<tr align="left">
	<td colspan="2" align="center" class="style1"><span class="style2">Editar o V&Iacute;DEO</span></td>
	</tr>
	<tr>
      <td class="style1">Data:</td>
      <td><input name="ds_data" type="text" size="15" maxlength="10" value="<? echo($novadata)?>">
    (DD-MM-AAAA)</td>
	  </tr>
	<tr>
      <td class="style1"> T&iacute;tulo:</td>
      <td><input name="ds_titulo" type="text" id="ds_titulo" value="<? echo($arr[ds_titulo])?>" size="80" maxlength="200">
        <span class="style1">(*)</span></td>
	  </tr>
	<tr>
	<td width="151" class="style1"> Local:</td>
	<td><input name="ds_local" type="text" id="ds_local" value="<? echo($arr[ds_local])?>" size="80" maxlength="200"></td>
	</tr>
	<tr>
      <td class="style1"> Link You Tube: (com http)</td>
      <td><input name="ds_link" type="text" id="ds_link" value="<? echo($arr[ds_link])?>" size="80" maxlength="200">
        <span class="style1">(*)</span></td>
	  </tr>
	<tr>
      <td class="style1"> Informa&ccedil;&otilde;es:</td>
      <td><textarea name="ds_info" cols="80" rows="3" id="ds_info"><? echo($arr[ds_info])?></textarea>
        <span class="style1">(*)</span></td>
	  </tr>
    <tr align="center">
    <td colspan="2">
	<input type="hidden" name="cd" value="<? echo($arr[cd_video])?>">
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