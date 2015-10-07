<?
	include "../conectar.php";
	include "sessao.php";
	if($_POST){
		$cod_equipamento = $_POST[cd_equipamento];
		$des_equipamento = $_POST[ds_equipamento];
		$cod_linha = $_POST[cd_linha];
		$nome_linha = $_POST[nm_linha];
	}
	if($_GET){
		$cod_equipamento = $_GET[cd_equipamento];
		$des_equipamento = $_GET[ds_equipamento];
		$cod_linha = $_GET[cd_linha];
		$nome_linha = $_GET[nm_linha];
	}
?><head>
<link rel="stylesheet" href="style.css" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="JavaScript">

function foto(img, w, h){
  obj=window.open('','', config='resizable=no,location=no,directories=no,status=no,toolbar=no,menubar=no,scrollbars=no,width=' + w  + ',height=' + h + ',top=0,left=0');
  obj.document.write('<html><head><title># ADM - Fotos para o site#</title><link rel="stylesheet" href="style.css" type="text/css"></head>');
  obj.document.write('<body class="fundo_painel" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">');
  obj.document.write('<a href="javascript:window.close()"><img src=' + img + ' border="0" alt="Clique para fechar"></a></body></html><br>');
} 

</script>

</head>

<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="gerenciador_fotos_equipamentos.php" method="post">
	<tr> 
	<td width="100%" valign="top"><? include("menu.php") ?></td>
	</tr>
	<tr> 
	<td align="center"> <table width="100%" border="1" align="center" cellpadding="0" cellspacing="4">
	<tr align="left">
	  <td colspan="9" align="center" class="style2">Gerenciar FOTOS - <a href="gerenciador_equipamentos.php?cd_linha=<? echo($cod_linha) ?>&nm_linha=<? echo($nome_linha) ?>"><? echo($nome_linha) ?></a> - <? echo($des_equipamento) ?>
        <?
if(isset($_POST[id])){
	$id = $_POST[id];
	if($_POST[acao] == "Remover"){
       	foreach($id as $i){
			$id_query = mysql_query("DELETE FROM fotos_equipamentos WHERE cd_foto_equipamento = '$i'");
			unlink("../fotos_equipamentos/mini_foto_"."$i.JPG");
			unlink("../fotos_equipamentos/foto_"."$i.JPG");
		}
	}elseif($_POST[acao] == "Publicar"){
       	foreach($id as $i){
			$id_query = mysql_query("UPDATE fotos_equipamentos SET bl_publicarfe='1' WHERE cd_foto_equipamento = '$i'");
		}
	}elseif($_POST[acao] == "Despublicar"){
       	foreach($id as $i){
			$id_query = mysql_query("UPDATE fotos_equipamentos SET bl_publicarfe='0' WHERE cd_foto_equipamento = '$i'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_POST[ord])){
	$ord = $_POST[ord];
	if($_POST[acao2] == "Salvar Ordem"){
		foreach($ord as $o => $cd_ordem){
			$id_query = mysql_query("UPDATE fotos_equipamentos SET cd_ordemfe='$cd_ordem' WHERE cd_foto_equipamento = '$o'");
		}
	}elseif(isset($_POST[acao2])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
$sql = "Select * from fotos_equipamentos WHERE cd_equipamento = $cod_equipamento ORDER BY cd_ordemfe";
$id_query = mysql_query($sql) or die("Erro ao executar consulta");
if (!mysql_num_rows($id_query)) {
	echo("<p><font color=\"red\"><b>Não há nenhuma foto incluída para este equipamento. <a href=\"cadastro_fotos_equipamento.php?cd_equipamento=$cod_equipamento&ds_equipamento=$des_equipamento&cd_linha=$cod_linha&nm_linha=$nome_linha\">clique aqui para incluir uma nova</a></b></font></p>");
}else{
?></td>
	  </tr>
	<tr>
	<td align="center">&nbsp;</td>
	<td align="center"><b>Foto</b></td>
	<td align="center"><b>Ordem</b></td>
	<td align="center"><b>Legenda</b></td>
	<td align="center"><b>Publicada?</b></td>
	<td align="center"><a href="cadastro_fotos_equipamento.php?cd_equipamento=<? echo($cod_equipamento) ?>&ds_equipamento=<? echo($des_equipamento) ?>&cd_linha=<? echo($cod_linha) ?>&nm_linha=<? echo($nome_linha) ?>"><img src="tit_adm_incluir.gif" width="59" height="21" border="0" /></a></td>
	</tr>
<?
	while($arr = mysql_fetch_assoc($id_query)){
?>
	<tr bgcolor="#CCCCCC">
	<td align="center"><input type="checkbox" value="<? echo($arr[cd_foto_equipamento]) ?>" name="id[]" style="border-width: 0px"></td>
<?
		$ImageSize  = GetImageSize("../fotos_equipamentos/foto_$arr[cd_foto_equipamento].JPG");
		$Img_w = $ImageSize[0]; 
		$Img_h = $ImageSize[1]; 
?>
		<td align="center">
		<a href="javascript:foto('../fotos_equipamentos/foto_<? echo($arr[cd_foto_equipamento]) ?>.JPG','<? echo($Img_w) ?>','<? echo($Img_h) ?>')">
		<img src="../fotos_equipamentos/mini_foto_<? echo($arr[cd_foto_equipamento]) ?>.JPG" alt="Clique para ver a foto em tamanho real" border="0">
		</a>
		</td>
		<td align="center"><input type="text" size="2" value="<?=$arr[cd_ordemfe]?>" name="ord[<?=$arr[cd_foto_equipamento]?>]" /></td>
	<td align="center"><? echo($arr[ds_legenda]) ?></td>
	<td align="center">
<?
	if ($arr[bl_publicarfe]){
?>
		Sim
<?
	}else{
?>
		Não
<?
	}	  
?>
	</td>
   	<td align="center"><a href="edicao_fotos_equipamento.php?cd=<? echo($arr[cd_foto_equipamento]) ?>&cd_equipamento=<? echo($cod_equipamento) ?>&ds_equipamento=<? echo($des_equipamento) ?>&cd_linha=<? echo($cod_linha) ?>&nm_linha=<? echo($nome_linha) ?>"><img src="tit_adm_editar.gif" width="70" height="23" border="0"></a></td>
	</tr>
<?
	}
?>
      <tr>
        <td colspan="9" height="20"></td>
      </tr>
	<tr bgcolor="#EEEEEE">
	<td align="left" colspan="9">
	<input type="submit" value="Remover" name="acao">
	<input type="submit" value="Publicar" name="acao">
	<input type="submit" value="Despublicar" name="acao">
	<input type="submit" value="Salvar Ordem" name="acao2">
    <input type="hidden" name="cd_equipamento" value="<? echo($cod_equipamento) ?>">
    <input type="hidden" name="ds_equipamento" value="<? echo($des_equipamento) ?>">
    <input type="hidden" name="cd_linha" value="<? echo($cod_linha) ?>">
    <input type="hidden" name="nm_linha" value="<? echo($nome_linha) ?>">
<?
}
?></td>
	  </tr>
	</table>
	<div align="left"><strong class="style2">Instru&ccedil;&otilde;es:</strong><br><br>
	<span class="style2">Editar uma foto do im&oacute;vel:</span> Clicar na foto do im&oacute;vel pretendida<br>
	<span class="style2">Remover uma foto do im&oacute;vel:</span> Marcar a(s) foto(s) do im&oacute;vel(is) desejada(s) e clicar em &quot;remover&quot;<br>
	<span class="style2">Publicar uma foto do im&oacute;vel:</span> Marcar a(s) foto(s) do im&oacute;vel(is) desejada(s) e clicar em &quot;publicar&quot; (disponibilizar no site) <br>
	<span class="style2">Despublicar uma foto do im&oacute;vel:</span> Marcar a(s) foto(s) do im&oacute;vel(is) desejada(s) e clicar em &quot;despublicar&quot; (indisponibilizar no site)
	</div>	</td>
	</tr>
	</form>
</table>