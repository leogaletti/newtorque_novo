<?
include "../conectar.php";
include "sessao.php";
if($_GET){
	$cod_foto = $_GET[cd];
	$cod_equipamento = $_GET[cd_equipamento];
	$des_equipamento = $_GET[ds_equipamento];
	$cod_linha = $_GET[cd_linha];
	$nome_linha = $_GET[nm_linha];
}
if($_POST){
	$cod_foto = $_POST[cd];
	$cod_equipamento = $_POST[cd_equipamento];
	$des_equipamento = $_POST[ds_equipamento];
	$cod_linha = $_POST[cd_linha];
	$nome_linha = $_POST[nm_linha];
	$id_query = mysql_query("UPDATE fotos_equipamentos SET cd_equipamento = '{$_POST[cd_equipamento]}',
							ds_legenda = '{$_POST[ds_legenda]}'
							WHERE cd_foto_equipamento = '{$_POST[cd]}'
							") or die(mysql_error());
	if($HTTP_POST_FILES['file']['tmp_name']){
		$quality = 85; 
		$ImageSize  = GetImageSize($HTTP_POST_FILES['file']['tmp_name']);
		$Img_w = $ImageSize[0]; 
		$Img_h = $ImageSize[1]; 
		if ($Img_w >= $Img_h){
			$Img_wnma = 640;
			$Img_wnme = 120;
			$Img_hnma = 480;
			$Img_hnme = 90;
		}else{
			$Img_wnma = 480;
			$Img_wnme = 90;
			$Img_hnma = 640;
			$Img_hnme = 120;
		}
		$thumbnail = imagecreatetruecolor($Img_wnma, $Img_hnma);
		$thumbnail_mini = imagecreatetruecolor($Img_wnme, $Img_hnme);
		$originalimage = imagecreatefromjpeg($HTTP_POST_FILES['file']['tmp_name']); 

		$imagem_marca = "marca.gif";
		$imagem_marca = imagecreatefromgif($imagem_marca); 

		imagecopyresampled($thumbnail, $originalimage, 0, 0, 0, 0, $Img_wnma, $Img_hnma, $Img_w, $Img_h); 
		imagecopyresampled($thumbnail_mini, $originalimage, 0, 0, 0, 0, $Img_wnme, $Img_hnme, $Img_w, $Img_h); 

		imagecopymerge($thumbnail, $imagem_marca, 8, 2, 0, 0, 200, 20, 80); 

		imagejpeg($thumbnail,'../imagens/temp.jpg',$quality);
		imagejpeg($thumbnail_mini,'../imagens/temp_mini.jpg',$quality);
		copy("../imagens/temp.jpg","../fotos_equipamentos/foto_"."{$_POST[cd]}.JPG");
		copy("../imagens/temp_mini.jpg","../fotos_equipamentos/mini_foto_"."{$_POST[cd]}.JPG");
	}
	header("Location:gerenciador_fotos_equipamentos.php?cd_equipamento=$cod_equipamento&ds_equipamento=$des_equipamento&cd_linha=$cod_linha&nm_linha=$nome_linha");
}else{
	$sql = "SELECT * FROM fotos_equipamentos where cd_foto_equipamento = $cod_foto";
	$id_query = mysql_query($sql);
	$arr = mysql_fetch_assoc($id_query);
}

?><head>

<link rel="stylesheet" href="style.css" type="text/css">

</head>

<table align="center" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="edicao_fotos_equipamento.php" method="post" enctype="multipart/form-data">
	<tr>
	<td><? include("menu.php") ?></td>
	</tr>
	<tr>
	<td align="left">
	<table width="100%" border="1" align="center" cellpadding="0" cellspacing="10">
    <tr align="left">
	<td colspan="2" align="center" class="style2">Editar FOTOS do equipamento - <a href="gerenciador_equipamentos.php?cd_linha=<? echo($cod_linha) ?>&nm_linha=<? echo($nome_linha) ?>" class="link"><? echo($nome_linha) ?></a> - <? echo($des_equipamento) ?></td>
	</tr>
    <tr>
    <td rowspan="2" align="right" class="style1">Foto:<br>(Deve ter a extens&atilde;o .JPG)</td>
	<td align="left"><img src="../fotos_equipamentos/mini_foto_<? echo($arr[cd_foto_equipamento]) ?>.JPG" border="1"></td>
	</tr>
	<tr>
    <td><input type="file" name="file" accept="image/jpeg"></td>
	</tr>
    <tr>
    <td align="right" class="style1">Legenda da foto:</td>
    <td><input name="ds_legenda" type="text" id="ds_legenda" value="<? echo($arr[ds_legenda]) ?>" size="50" maxlength="150"></td>
	</tr>
	<tr align="center">
    <td colspan="2">
	<input type="hidden" name="cd" value="<? echo($arr[cd_foto_equipamento])?>">
	<input type="hidden" name="cd_equipamento" value="<? echo($cod_equipamento) ?>">
	<input type="hidden" name="ds_equipamento" value="<? echo($des_equipamento) ?>">
    <input type="hidden" name="cd_linha" value="<? echo($cod_linha) ?>">
    <input type="hidden" name="nm_linha" value="<? echo($nome_linha) ?>">
	<input type="hidden" name="t_foto" value="<? echo($arr[bl_tem_foto])?>">
	<input type="submit" name="Submit" value="Salvar">
	</td>
    </tr>
    </table>
    <hr align="left" noshade color="#000099">
    <strong class="style1">Instru&ccedil;&otilde;es:</strong><br>    <br>
    <span class="style1">Editar dados:</span> Alterar os campos desejados.<br>
    <span class="style1">Editar uma foto: </span><br>
    Para manter a foto atual -&gt; n&atilde;o mexer<br>
    Para alterar a foto -&gt; Clicar em &quot;procurar&quot;, selecionar a foto desejada (tem de ser foto com extens&atilde;o .JPG)<br>
    Para excluir a foto e deixar sem nenhuma -&gt; Apagar o endere&ccedil;o no campo &quot;foto&quot;<br>    <br>
	<span class="style1">Assim que tiver alterado todos os campos desejados clicar em &quot;Salvar&quot;</span>
	</td>
	</tr>
	<form>
</table>