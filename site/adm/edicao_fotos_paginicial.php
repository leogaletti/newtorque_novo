<?
include "../conectar.php";
include "sessao.php";
if($_POST){
	if($HTTP_POST_FILES['file1']['tmp_name']){
		$quality = 85; 
		$ImageSize  = GetImageSize($HTTP_POST_FILES['file1']['tmp_name']);
		$Img_w = $ImageSize[0]; 
		$Img_h = $ImageSize[1]; 
		$Img_wnma = 200;
		$Img_hnma = 134;
		$thumbnail = imagecreatetruecolor($Img_wnma, $Img_hnma);
		$originalimage = imagecreatefromjpeg($HTTP_POST_FILES['file1']['tmp_name']); 
		imagecopyresampled($thumbnail, $originalimage, 0, 0, 0, 0, $Img_wnma, $Img_hnma, $Img_w, $Img_h); 
		imagejpeg($thumbnail,'../imagens/temp.jpg',$quality);
		copy("../imagens/temp.jpg","../imagens/inicial01.jpg");
	}
	if($HTTP_POST_FILES['file2']['tmp_name']){
		$quality = 85; 
		$ImageSize  = GetImageSize($HTTP_POST_FILES['file2']['tmp_name']);
		$Img_w = $ImageSize[0]; 
		$Img_h = $ImageSize[1]; 
		$Img_wnma = 200;
		$Img_hnma = 134;
		$thumbnail = imagecreatetruecolor($Img_wnma, $Img_hnma);
		$originalimage = imagecreatefromjpeg($HTTP_POST_FILES['file2']['tmp_name']); 
		imagecopyresampled($thumbnail, $originalimage, 0, 0, 0, 0, $Img_wnma, $Img_hnma, $Img_w, $Img_h); 
		imagejpeg($thumbnail,'../imagens/temp.jpg',$quality);
		copy("../imagens/temp.jpg","../imagens/inicial02.jpg");
	}
	if($HTTP_POST_FILES['file3']['tmp_name']){
		$quality = 85; 
		$ImageSize  = GetImageSize($HTTP_POST_FILES['file3']['tmp_name']);
		$Img_w = $ImageSize[0]; 
		$Img_h = $ImageSize[1]; 
		$Img_wnma = 200;
		$Img_hnma = 134;
		$thumbnail = imagecreatetruecolor($Img_wnma, $Img_hnma);
		$originalimage = imagecreatefromjpeg($HTTP_POST_FILES['file3']['tmp_name']); 
		imagecopyresampled($thumbnail, $originalimage, 0, 0, 0, 0, $Img_wnma, $Img_hnma, $Img_w, $Img_h); 
		imagejpeg($thumbnail,'../imagens/temp.jpg',$quality);
		copy("../imagens/temp.jpg","../imagens/inicial03.jpg");
	}
	if($HTTP_POST_FILES['file4']['tmp_name']){
		$quality = 85; 
		$ImageSize  = GetImageSize($HTTP_POST_FILES['file4']['tmp_name']);
		$Img_w = $ImageSize[0]; 
		$Img_h = $ImageSize[1]; 
		$Img_wnma = 200;
		$Img_hnma = 134;
		$thumbnail = imagecreatetruecolor($Img_wnma, $Img_hnma);
		$originalimage = imagecreatefromjpeg($HTTP_POST_FILES['file4']['tmp_name']); 
		imagecopyresampled($thumbnail, $originalimage, 0, 0, 0, 0, $Img_wnma, $Img_hnma, $Img_w, $Img_h); 
		imagejpeg($thumbnail,'../imagens/temp.jpg',$quality);
		copy("../imagens/temp.jpg","../imagens/inicial04.jpg");
	}
 	header("Location: menu.php");
}

?><head>

<link rel="stylesheet" href="style.css" type="text/css">

</head>

<table align="center" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="edicao_fotos_paginicial.php" method="post" enctype="multipart/form-data">
	<tr>
	<td><? include("menu.php") ?></td>
	</tr>
	<tr>
	<td align="left">
	<table width="100%" border="1" align="center" cellpadding="0" cellspacing="10">
    <tr align="left">
	<td colspan="2" align="center" class="style2">Editar FOTOS das chamadas da PÁGINA INICIAL</td>
	</tr>
    <tr align="left">
      <td colspan="2" align="center" class="style2">Chamada &quot;Em Destaque&quot;</td>
    </tr>
    <tr>
    <td rowspan="2" align="right" class="style1">Foto:<br>(Deve ter a extens&atilde;o .JPG)<br />
      melhor 200 x 134px</td>
	<td align="left"><img src="../imagens/inicial01.jpg" border="1"></td>
	</tr>
	<tr>
	  <td><input type="file" name="file1" accept="image/jpeg"></td>
	  </tr>
	<tr align="left">
	  <td colspan="2" align="center" class="style2">Chamada &quot;Vantagens da New Torque&quot;</td>
	  </tr>
	<tr>
	  <td rowspan="2" align="right" class="style1">Foto:<br />
	    (Deve ter a extens&atilde;o .JPG)<br />
	    melhor 200 x 134px</td>
	  <td align="left"><img src="../imagens/inicial02.jpg" alt="" border="1" /></td>
	  </tr>
	<tr>
	  <td><input type="file" name="file2" accept="image/jpeg" /></td>
	  </tr>
	<tr align="left">
	  <td colspan="2" align="center" class="style2">Chamada &quot;Agende uma Visita&quot;</td>
	  </tr>
	<tr>
	  <td rowspan="2" align="right" class="style1">Foto:<br />
	    (Deve ter a extens&atilde;o .JPG)<br />
	    melhor 200 x 134px</td>
	  <td align="left"><img src="../imagens/inicial03.jpg" alt="" border="1" /></td>
	  </tr>
	<tr>
	  <td><input type="file" name="file3" accept="image/jpeg" /></td>
	  </tr>
	<tr align="left">
	  <td colspan="2" align="center" class="style2">Chamada &quot;Trabalhe Conosco&quot;</td>
	  </tr>
	<tr>
	  <td rowspan="2" align="right" class="style1">Foto:<br />
	    (Deve ter a extens&atilde;o .JPG)<br />
	    melhor 200 x 134px</td>
	  <td align="left"><img src="../imagens/inicial04.jpg" alt="" border="1" /></td>
	  </tr>
	<tr>
	  <td><input type="file" name="file4" accept="image/jpeg" /></td>
	  </tr>
	<tr align="center">
	  <td colspan="2">
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