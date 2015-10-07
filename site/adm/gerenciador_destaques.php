<?
include "../conectar.php";
include "sessao.php";

?><head>

<script language="JavaScript">

function foto(img, w, h){
  obj=window.open('','', config='resizable=no,location=no,directories=no,status=no,toolbar=no,menubar=no,scrollbars=no,width=' + w  + ',height=' + h + ',top=0,left=0');
  obj.document.write('<html><head><title># ADM - Fotos para o site#</title><link rel="stylesheet" href="style.css" type="text/css"></head>');
  obj.document.write('<body class="fundo_painel" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">');  obj.document.write('<a href="javascript:window.close()"><img src=' + img + ' border="0" alt="Clique para fechar"></a></body></html><br>');
} 

</script>

<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>




<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="gerenciador_destaques.php" method="post">
	<tr> 
	<td width="100%" valign="top"><? include("menu.php") ?></td>
	</tr>
	<tr> 
	<td align="center"> <table width="100%" border="1" align="center" cellpadding="0" cellspacing="4">
	<tr align="left">
	  <td colspan="9" align="center" class="style2">Gerenciar DESTAQUES da p&aacute;gina inicial	    <? if(isset($_POST[id])){
	$id = $_POST[id];
	if($_POST[acao] == "Remover"){
		foreach($id as $i){
			$id_query = mysql_query("DELETE FROM destaques WHERE cd_destaque = '$i'");
			unlink("../fotos_destaque/foto_"."$i.JPG");
		}
	}elseif($_POST[acao] == "Publicar"){
		foreach($id as $i){
			$id_query = mysql_query("UPDATE destaques SET bl_publicar='1' WHERE cd_destaque = '$i'");
		}
	}elseif($_POST[acao] == "Despublicar"){
		foreach($id as $i){
			$id_query = mysql_query("UPDATE destaques SET bl_publicar='0' WHERE cd_destaque = '$i'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_POST[ord])){
	$ord = $_POST[ord];
	if($_POST[acao] == "Salvar Ordem"){
		foreach($ord as $o => $cd_ordem){
			$id_query = mysql_query("UPDATE destaques SET cd_ordem='$cd_ordem' WHERE cd_destaque = '$o'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_GET[ordem])){
	$novaordem = $_GET[ordem];
}else{
	$novaordem = "cd_ordem";
}
$sql = "SELECT * FROM destaques ORDER BY $novaordem";
$id_query = mysql_query($sql) or die("Erro ao executar consulta");
if (!mysql_num_rows($id_query)) {
	echo("<p><font color=\"red\"><b>Não há nenhum destaque cadastrado. <a href=\"cadastro_destaque.php\">clique aqui para incluir um novo</a></b></font></p>");
}else{
?>
</td>
	  </tr>
	<tr>
	<td width="70" align="center">&nbsp;</td>
	<td align="center"><b>Imagem</b></td>
    <td align="center"><b>Ordem de Aparecimento</b></td>
	<td align="center"><b>Link</b></td>
	<td align="center"><b>Publicado?</b></td>
	<td align="center"><a href="cadastro_destaque.php"><img src="tit_adm_incluir.gif" width="59" height="21" border="0" /></a></td>
	</tr>
<?
	while($arr = mysql_fetch_assoc($id_query)){
?>
		<tr bgcolor="#CCCCCC">
		<td align="center"><input type="checkbox" value="<? echo($arr[cd_destaque]) ?>" name="id[]" style="border-width: 0px"></td>
<?
		$ImageSize  = GetImageSize("../fotos_destaque/foto_$arr[cd_destaque].JPG");
		$Img_w = $ImageSize[0]; 
		$Img_h = $ImageSize[1]; 
?>
		<td align="center">
		<a href="javascript:foto('../fotos_destaque/foto_<? echo($arr[cd_destaque]) ?>.JPG','<? echo($Img_w) ?>','<? echo($Img_h) ?>')">
		<img src="../fotos_destaque/foto_<? echo($arr[cd_destaque]) ?>.JPG" alt="Clique para ver a foto em tamanho real" width="160" height="80" border="1">
		</a>
		</td>
		<td align="center"><input type="text" size="2" value="<?=$arr[cd_ordem]?>" name="ord[<?=$arr[cd_destaque]?>]" /></td>
		<td align="center"><? echo($arr[ds_link]) ?></td>
		<td align="center">
<?
		if ($arr[bl_publicar]){
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
	   	<td align="center"><a href="edicao_destaque.php?cd=<? echo($arr[cd_destaque]) ?>"><img src="tit_adm_editar.gif" width="70" height="23" border="0"></a></td>
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
	<input type="submit" value="Salvar Ordem" name="acao">
<?
}
?></td>
	  </tr>
	</table>
	<div align="left"><strong class="style2">Instru&ccedil;&otilde;es:</strong><br><br>
	<span class="style2">Editar uma foto da destaques:</span> Clicar na foto da destaques pretendida<br>
	<span class="style2">Remover uma foto da destaques:</span> Marcar a(s) foto da destaques(s) desejada(s) e clicar em &quot;remover&quot;<br>
	<span class="style2">Publicar uma foto da destaques:</span> Marcar a(s) foto da destaques(s) desejada(s) e clicar em &quot;publicar&quot; (disponibilizar no site) <br>
	<span class="style2">Despublicar uma foto da destaques:</span> Marcar a(s) foto da destaques(s) desejada(s) e clicar em &quot;despublicar&quot; (indisponibilizar no site)
	</div>	</td>
	</tr>
	</form>
</table>