<?
include "../conectar.php";
include "sessao.php";
if($_GET){
	$cod_cliente = $_GET[cd];
}
if($_POST){
	$id_query = mysql_query("UPDATE clientes SET 
							ds_link = '{$_POST[ds_link]}',
							ds_target = '{$_POST[ds_target]}'
							WHERE cd_cliente = '{$_POST[cd]}'
							") or die(mysql_error());
	if($HTTP_POST_FILES['file']['tmp_name']){
		$quality = 85; 
		$ImageSize  = GetImageSize($HTTP_POST_FILES['file']['tmp_name']);
		$Img_w = $ImageSize[0]; 
		$Img_h = $ImageSize[1]; 
		$Img_wn = 200;
		$Img_hn = 100;
		$thumbnail = imagecreatetruecolor($Img_wn, $Img_hn);
		$originalimage = imagecreatefromjpeg($HTTP_POST_FILES['file']['tmp_name']); 
		imagecopyresampled($thumbnail, $originalimage, 0, 0, 0, 0, $Img_wn, $Img_hn, $Img_w, $Img_h); 
		imagejpeg($thumbnail,'../imagens/temp.jpg',$quality);
		copy("../imagens/temp.jpg","../fotos_cliente/foto_"."{$_POST[cd]}.JPG");
	}
	header("Location: gerenciador_clientes.php");
}else{
	$sql = "SELECT * FROM clientes where cd_cliente = $cod_cliente";
	$id_query = mysql_query($sql);
	$arr = mysql_fetch_assoc($id_query);
	$cod_target_atual = $arr[ds_target];
}

?><head>


<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>

<table align="center" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="edicao_cliente.php" method="post" enctype="multipart/form-data" name="ed_fot_cliente">
	<tr>
	<td><? include("menu.php") ?></td>
	</tr>
	<tr>
	<td align="left">
	<table width="100%" border="1" align="center" cellpadding="4" cellspacing="10" class="style1">
    <tr align="left">
	<td colspan="2" align="left">Alterar   cliente</td>
	</tr>
    <tr>
    <td rowspan="2" align="right">Imagem: 
      (deve ter a extens&atilde;o .JPG)</td>
	<td align="left">
	<img src="../fotos_cliente/foto_<? echo($arr[cd_cliente]) ?>.JPG" border="1">
	</td>
	</tr>
	<tr>
    <td><input type="file" name="file" accept="image/jpeg">
      (200 x 100 px)</td>
	</tr>
	<tr>
      <td align="right">Link:</td>
      <td height="5"><input name="ds_link" type="text" id="ds_link" value="<? echo($arr[ds_link]) ?>" size="50" maxlength="150"></td>
	  </tr>
	<tr>
	  <td align="right">Abre o link:</td>
	  <td height="5"><select name="ds_target" id="ds_target">
	    <option value="_self" <? if($cod_target_atual == "_self" ) echo "selected" ?>>Link Interno</option>
	    <option value="_blank" <? if($cod_target_atual == "_blank" ) echo "selected" ?>>Link Externo</option>
	    </select></td>
	  </tr>
	<tr align="center">
    <td colspan="2">
	<input type="hidden" name="cd" value="<? echo($arr[cd_cliente]) ?>">
	<input type="submit" name="Submit" value="Salvar">
	</td>
    </tr>
    </table>
    <hr align="left" noshade color="#000099">
    <strong class="style1">Instru&ccedil;&otilde;es:</strong><br>    <br>
    <span class="style1">Editar dados:</span> Alterar os campos desejados.<br>
    <span class="style1">Editar um Banner: </span><br>
    Para manter o clientes atual -&gt; n&atilde;o mexer<br>
    Para alterar o clientes -&gt; Clicar em &quot;procurar&quot;, selecionar a imagem desejada (tem de ser extens&atilde;o .JPG)<br>
    Para excluir a imagem do clientes e deixar sem nenhuma -&gt; Apagar o endere&ccedil;o no campo &quot;imagem&quot;<br>    
    <br>
	<span class="style1">Assim que tiver alterado todos os campos desejados clicar em &quot;Salvar&quot;</span>
	</td>
	</tr>
	<form>
</table>