<?
include "../conectar.php";
include "sessao.php";
if($_POST){
	$id_query = mysql_query("INSERT INTO destaques(ds_legenda, ds_link, ds_target) VALUES('{$_POST[ds_legenda]}','{$_POST[ds_link]}','{$_POST[ds_target]}')") or die(mysql_error());
	$id_query = mysql_query("SELECT * FROM destaques ORDER BY cd_destaque DESC");
	$arr = mysql_fetch_assoc($id_query);
	if($HTTP_POST_FILES['file']['tmp_name']){
		$quality = 85;
		$ImageSize  = GetImageSize($HTTP_POST_FILES['file']['tmp_name']);
		$Img_w = $ImageSize[0];
		$Img_h = $ImageSize[1];
		$Img_wn = 960;
		$Img_hn = 480;
		$thumbnail = imagecreatetruecolor($Img_wn, $Img_hn);
		$originalimage = imagecreatefromjpeg($HTTP_POST_FILES['file']['tmp_name']);
		imagecopyresampled($thumbnail, $originalimage, 0, 0, 0, 0, $Img_wn, $Img_hn, $Img_w, $Img_h);
		imagejpeg($thumbnail,'../imagens/temp.jpg',$quality);
		copy("../imagens/temp.jpg","../fotos_destaque/foto_{$arr[cd_destaque]}.JPG");
	}
	header("Location: gerenciador_destaques.php");
}

?><head>
<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<table align="center" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="cadastro_destaque.php" method="post" enctype="multipart/form-data" name="cad_destaque">
	<tr>
	<td><? include("menu.php") ?></td>
	</tr>
	<tr>
	<td align="center">
	<table width="100%" border="1" align="center" cellpadding="4" cellspacing="10" class="style1">
	<tr>
	<td colspan="2" align="center" class="style2">Novo DESTAQUE da p&aacute;gina inicial</td>
	</tr>
    <tr>
	<td align="right">Imagem: (deve ter a extens&atilde;o .JPG)</td>
	<td><input type="file" name="file" accept="image/jpeg"> 
	(960 x 480 px) </td>
	</tr>
    <tr>
      <td align="right" class="style1">Legenda:</td>
      <td height="5"><input name="ds_legenda" type="text" id="ds_legenda" value="" size="50" maxlength="150" /></td>
    </tr>
	<tr>
	<td align="right">Link:</td>
	<td height="5"><input name="ds_link" type="text" id="ds_link" value="" size="50" maxlength="150"></td>
	</tr>
	<tr>
	  <td align="right">Abre o link:</td>
	  <td height="5"><select name="ds_target" id="ds_target">
	    <option value="_self">Link Interno</option>
	    <option value="_blank">Link Externo</option>
	    </select></td>
	  </tr>
    <tr align="center">
	<td colspan="2">
	<input type="submit" name="Submit" value="Salvar">
	</td>
	</tr>
    </table>        
    <hr align="left" noshade color="#000099">
	<div align="left"><strong class="style1">Instru&ccedil;&otilde;es:</strong><br><br>
	<span class="style1">Incluir dados:</span> Digitar os valores dos campos desejados.<br>
    <span class="style1">Incluir um destaques:</span><br>
    Para incluir uma imagem -&gt; Clicar em &quot;procurar&quot;, selecionar a imagem desejada (tem de ser foto com extens&atilde;o .JPG)<br>
    Para deixar sem nenhuma -&gt; N&atilde;o mexer no campo &quot;imagem&quot;<br>
    <br>
    <span class="style1">Assim que tiver inserido todos os campos desejados clicar em &quot;Salvar&quot;</span>
	</div>
	</td>
	</tr>
	</form>
</table>