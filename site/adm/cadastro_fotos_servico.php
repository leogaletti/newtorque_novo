<?
include "../conectar.php";
include "sessao.php";
if($_GET){
	$cod_servico = $_GET[cd_serv];
	$nome_servico = $_GET[nm_serv];
}
if($_POST){
	$cod_servico = $_POST[cd_serv];
	$nome_servico = $_POST[nm_serv];
	if($HTTP_POST_FILES['file1']['tmp_name']){
		$id_query = mysql_query("INSERT INTO fotos_servicos(cd_servico,ds_legenda)
								 VALUES('{$cod_servico}','{$_POST[ds_legenda1]}')")
								  or die(mysql_error());
		$id_query = mysql_query("SELECT * FROM fotos_servicos ORDER BY cd_foto_servico DESC");
		$arr = mysql_fetch_assoc($id_query);
		$quality = 85;
		$ImageSize  = GetImageSize($HTTP_POST_FILES['file1']['tmp_name']);
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
		$originalimage = imagecreatefromjpeg($HTTP_POST_FILES['file1']['tmp_name']);

		$imagem_marca = "marca.gif";
		$imagem_marca = imagecreatefromgif($imagem_marca); 

		imagecopyresampled($thumbnail, $originalimage, 0, 0, 0, 0, $Img_wnma, $Img_hnma, $Img_w, $Img_h);
		imagecopyresampled($thumbnail_mini, $originalimage, 0, 0, 0, 0, $Img_wnme, $Img_hnme, $Img_w, $Img_h);

		imagecopymerge($thumbnail, $imagem_marca, 8, 2, 0, 0, 200, 20, 80); 

		imagejpeg($thumbnail,'../imagens/temp.jpg',$quality);
		imagejpeg($thumbnail_mini,'../imagens/temp_mini.jpg',$quality);
		copy("../imagens/temp.jpg","../fotos_servicos/foto_{$arr[cd_foto_servico]}.JPG");
		copy("../imagens/temp_mini.jpg","../fotos_servicos/mini_foto_{$arr[cd_foto_servico]}.JPG");
	}
	if($HTTP_POST_FILES['file2']['tmp_name']){
		$id_query = mysql_query("INSERT INTO fotos_servicos(cd_servico,ds_legenda)
								 VALUES('{$cod_servico}','{$_POST[ds_legenda2]}')")
								  or die(mysql_error());
		$id_query = mysql_query("SELECT * FROM fotos_servicos ORDER BY cd_foto_servico DESC");
		$arr = mysql_fetch_assoc($id_query);
		$quality = 85;
		$ImageSize  = GetImageSize($HTTP_POST_FILES['file2']['tmp_name']);
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
		$originalimage = imagecreatefromjpeg($HTTP_POST_FILES['file2']['tmp_name']);

		$imagem_marca = "marca.gif";
		$imagem_marca = imagecreatefromgif($imagem_marca); 

		imagecopyresampled($thumbnail, $originalimage, 0, 0, 0, 0, $Img_wnma, $Img_hnma, $Img_w, $Img_h);
		imagecopyresampled($thumbnail_mini, $originalimage, 0, 0, 0, 0, $Img_wnme, $Img_hnme, $Img_w, $Img_h);

		imagecopymerge($thumbnail, $imagem_marca, 8, 2, 0, 0, 200, 20, 80); 

		imagejpeg($thumbnail,'../imagens/temp.jpg',$quality);
		imagejpeg($thumbnail_mini,'../imagens/temp_mini.jpg',$quality);
		copy("../imagens/temp.jpg","../fotos_servicos/foto_{$arr[cd_foto_servico]}.JPG");
		copy("../imagens/temp_mini.jpg","../fotos_servicos/mini_foto_{$arr[cd_foto_servico]}.JPG");
	}
	if($HTTP_POST_FILES['file3']['tmp_name']){
		$id_query = mysql_query("INSERT INTO fotos_servicos(cd_servico,ds_legenda)
								 VALUES('{$cod_servico}','{$_POST[ds_legenda3]}')")
								  or die(mysql_error());
		$id_query = mysql_query("SELECT * FROM fotos_servicos ORDER BY cd_foto_servico DESC");
		$arr = mysql_fetch_assoc($id_query);
		$quality = 85;
		$ImageSize  = GetImageSize($HTTP_POST_FILES['file3']['tmp_name']);
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
		$originalimage = imagecreatefromjpeg($HTTP_POST_FILES['file3']['tmp_name']);

		$imagem_marca = "marca.gif";
		$imagem_marca = imagecreatefromgif($imagem_marca); 

		imagecopyresampled($thumbnail, $originalimage, 0, 0, 0, 0, $Img_wnma, $Img_hnma, $Img_w, $Img_h);
		imagecopyresampled($thumbnail_mini, $originalimage, 0, 0, 0, 0, $Img_wnme, $Img_hnme, $Img_w, $Img_h);

		imagecopymerge($thumbnail, $imagem_marca, 8, 2, 0, 0, 200, 20, 80); 

		imagejpeg($thumbnail,'../imagens/temp.jpg',$quality);
		imagejpeg($thumbnail_mini,'../imagens/temp_mini.jpg',$quality);
		copy("../imagens/temp.jpg","../fotos_servicos/foto_{$arr[cd_foto_servico]}.JPG");
		copy("../imagens/temp_mini.jpg","../fotos_servicos/mini_foto_{$arr[cd_foto_servico]}.JPG");
	}
	if($HTTP_POST_FILES['file4']['tmp_name']){
		$id_query = mysql_query("INSERT INTO fotos_servicos(cd_servico,ds_legenda)
								 VALUES('{$cod_servico}','{$_POST[ds_legenda4]}')")
								  or die(mysql_error());
		$id_query = mysql_query("SELECT * FROM fotos_servicos ORDER BY cd_foto_servico DESC");
		$arr = mysql_fetch_assoc($id_query);
		$quality = 85;
		$ImageSize  = GetImageSize($HTTP_POST_FILES['file4']['tmp_name']);
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
		$originalimage = imagecreatefromjpeg($HTTP_POST_FILES['file4']['tmp_name']);

		$imagem_marca = "marca.gif";
		$imagem_marca = imagecreatefromgif($imagem_marca); 

		imagecopyresampled($thumbnail, $originalimage, 0, 0, 0, 0, $Img_wnma, $Img_hnma, $Img_w, $Img_h);
		imagecopyresampled($thumbnail_mini, $originalimage, 0, 0, 0, 0, $Img_wnme, $Img_hnme, $Img_w, $Img_h);

		imagecopymerge($thumbnail, $imagem_marca, 8, 2, 0, 0, 200, 20, 80); 

		imagejpeg($thumbnail,'../imagens/temp.jpg',$quality);
		imagejpeg($thumbnail_mini,'../imagens/temp_mini.jpg',$quality);
		copy("../imagens/temp.jpg","../fotos_servicos/foto_{$arr[cd_foto_servico]}.JPG");
		copy("../imagens/temp_mini.jpg","../fotos_servicos/mini_foto_{$arr[cd_foto_servico]}.JPG");
	}
	if($HTTP_POST_FILES['file5']['tmp_name']){
		$id_query = mysql_query("INSERT INTO fotos_servicos(cd_servico,ds_legenda)
								 VALUES('{$cod_servico}','{$_POST[ds_legenda5]}')")
								  or die(mysql_error());
		$id_query = mysql_query("SELECT * FROM fotos_servicos ORDER BY cd_foto_servico DESC");
		$arr = mysql_fetch_assoc($id_query);
		$quality = 85;
		$ImageSize  = GetImageSize($HTTP_POST_FILES['file5']['tmp_name']);
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
		$originalimage = imagecreatefromjpeg($HTTP_POST_FILES['file5']['tmp_name']);

		$imagem_marca = "marca.gif";
		$imagem_marca = imagecreatefromgif($imagem_marca); 

		imagecopyresampled($thumbnail, $originalimage, 0, 0, 0, 0, $Img_wnma, $Img_hnma, $Img_w, $Img_h);
		imagecopyresampled($thumbnail_mini, $originalimage, 0, 0, 0, 0, $Img_wnme, $Img_hnme, $Img_w, $Img_h);

		imagecopymerge($thumbnail, $imagem_marca, 8, 2, 0, 0, 200, 20, 80); 

		imagejpeg($thumbnail,'../imagens/temp.jpg',$quality);
		imagejpeg($thumbnail_mini,'../imagens/temp_mini.jpg',$quality);
		copy("../imagens/temp.jpg","../fotos_servicos/foto_{$arr[cd_foto_servico]}.JPG");
		copy("../imagens/temp_mini.jpg","../fotos_servicos/mini_foto_{$arr[cd_foto_servico]}.JPG");
	}
	header("Location: gerenciador_fotos_servicos.php?cd_serv=$cod_servico&nm_serv=$nome_servico");
}

?><head>

<link rel="stylesheet" href="style.css" type="text/css">

</head>

<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="cadastro_fotos_servico.php" method="post" enctype="multipart/form-data">
	<tr>
	<td><? include("menu.php") ?></td>
	</tr>
	<tr>
	<td align="center">
	<table width="100%" border="1" align="center" cellpadding="0" cellspacing="10" class="style1">
	<tr>
	  <td colspan="2" align="center" class="style2">Novas FOTOS para o  SERVI&Ccedil;O - &quot;<? echo($nome_servico) ?>&quot;</td>
	  </tr>
	<tr>
	<td colspan="2" align="left">&nbsp;</td>
	</tr>
	<tr>
	  <td align="right" bgcolor="#CCCCCC">Foto 1</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right">Nova Foto: (Arquivo com extens&atilde;o  .JPG)</td>
	  <td><input name="file1" type="file" accept="image/jpeg" />
	  (Melhor 640 X 480 px)</td>
	  </tr>
	<tr>
	  <td align="right">Legenda da foto:</td>
	  <td height="5"><input name="ds_legenda1" type="text" id="ds_legenda1" value="" size="50" maxlength="150" /></td>
	  </tr>
	<tr>
	  <td colspan="2" align="right">&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right" bgcolor="#CCCCCC">Foto 2</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right">Nova Foto: (Arquivo com extens&atilde;o  .JPG)</td>
	  <td><input type="file" name="file2" accept="image/jpeg" />
	    (Melhor 640 X 480 px)</td>
	  </tr>
	<tr>
	  <td align="right">Legenda da foto:</td>
	  <td height="5"><input name="ds_legenda2" type="text" id="ds_legenda2" value="" size="50" maxlength="150" /></td>
	  </tr>
	<tr>
	  <td colspan="2" align="right">&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right" bgcolor="#CCCCCC">Foto 3</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right">Nova Foto: (Arquivo com extens&atilde;o  .JPG)</td>
	  <td><input name="file3" type="file" accept="image/jpeg" />
	    (Melhor 640 X 480 px)</td>
	  </tr>
	<tr>
	  <td align="right">Legenda da foto:</td>
	  <td height="5"><input name="ds_legenda3" type="text" id="ds_legenda3" value="" size="50" maxlength="150" /></td>
	  </tr>
	<tr>
	  <td colspan="2" align="right">&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right" bgcolor="#CCCCCC">Foto 4</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right">Nova Foto: (Arquivo com extens&atilde;o  .JPG)</td>
	  <td><input name="file4" type="file" accept="image/jpeg" />
	    (Melhor 640 X 480 px)</td>
	  </tr>
	<tr>
	  <td align="right">Legenda da foto:</td>
	  <td height="5"><input name="ds_legenda4" type="text" id="ds_legenda4" value="" size="50" maxlength="150" /></td>
	  </tr>
	<tr>
	  <td colspan="2" align="right">&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right" bgcolor="#CCCCCC">Foto 5</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right">Nova Foto: (Arquivo com extens&atilde;o  .JPG)</td>
	  <td><input name="file5" type="file" accept="image/jpeg" />
	    (Melhor 640 X 480 px)</td>
	  </tr>
	<tr>
	  <td align="right">Legenda da foto:</td>
	  <td height="5"><input name="ds_legenda5" type="text" id="ds_legenda5" value="" size="50" maxlength="150" /></td>
	  </tr>
    <tr align="center">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="center">
	<td colspan="2">
    <input type="hidden" name="cd_serv" value="<? echo($cod_servico) ?>">
    <input type="hidden" name="nm_serv" value="<? echo($nome_servico) ?>">
	<input type="submit" name="Submit" value="Salvar">
	</td>
	</tr>
    </table>        
    <hr align="left" noshade color="#000099">
	<div align="left"><strong class="style1">Instru&ccedil;&otilde;es:</strong><br><br>
	<span class="style1">Incluir dados:</span> Digitar os valores dos campos desejados.<br>
    <span class="style1">Incluir uma foto:</span><br>
    Para incluir a foto -&gt; Clicar em &quot;procurar&quot;, selecionar a foto desejada (tem de ser foto com extens&atilde;o .JPG)<br>
    Para deixar sem nenhuma -&gt; N&atilde;o mexer no campo &quot;foto&quot;<br><br>
    <span class="style1">Assim que tiver inserido todos os campos desejados clicar em &quot;Salvar&quot;</span>
	</div>
	</td>
	</tr>
	</form>
</table>