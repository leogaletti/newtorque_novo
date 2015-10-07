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
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>




<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="gerenciador_clientes.php" method="post">
	<tr> 
	<td width="100%" valign="top"><? include("menu.php") ?></td>
	</tr>
	<tr> 
	<td align="center"> <table width="100%" border="1" align="center" cellpadding="4" cellspacing="4" class="style1">
	<tr align="left">
	  <td colspan="5" align="left">Gerenciar  clientes	<span class="style2"> </span> 	    <? if(isset($_POST[id])){
	$id = $_POST[id];
	if($_POST[acao] == "Remover"){
		foreach($id as $i){
			$id_query = mysql_query("DELETE FROM clientes WHERE cd_cliente = '$i'");
			unlink("../fotos_cliente/foto_"."$i.JPG");
		}
	}elseif($_POST[acao] == "Publicar"){
		foreach($id as $i){
			$id_query = mysql_query("UPDATE clientes SET bl_publicar='1' WHERE cd_cliente = '$i'");
		}
	}elseif($_POST[acao] == "Despublicar"){
		foreach($id as $i){
			$id_query = mysql_query("UPDATE clientes SET bl_publicar='0' WHERE cd_cliente = '$i'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_POST[ord])){
	$ord = $_POST[ord];
	if($_POST[acao] == "Salvar Ordem"){
		foreach($ord as $o => $cd_ordem){
			$id_query = mysql_query("UPDATE clientes SET cd_ordem='$cd_ordem' WHERE cd_cliente = '$o'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
$sql = "SELECT * FROM clientes ORDER BY cd_ordem";
$id_query = mysql_query($sql) or die("Erro ao executar consulta");
if (!mysql_num_rows($id_query)) {
	echo("<p><font color=\"red\"><b>Não há nenhum cliente cadastrado. <a href=\"cadastro_cliente.php\">clique aqui para incluir um novo</a></b></font></p>");
}else{
?>
</td>
	  </tr>
	<tr>
	<td align="center"><a href="cadastro_cliente.php"><img src="tit_adm_incluir.gif" width="70" height="23" border="0"></a></td>
	<td align="center"><b>Imagem</b></td>
    <td align="center"><b>Ordem de Aparecimento</b></td>
	<td align="center"><b>Link</b></td>
	<td align="center"><b>Publicado?</b></td>
	<td align="center">&nbsp;</td>
	</tr>
<?
	while($arr = mysql_fetch_assoc($id_query)){
?>
	<tr bgcolor="#CCCCCC">
	<td align="center"><input type="checkbox" value="<? echo($arr[cd_cliente]) ?>" name="id[]" style="border-width: 0px"></td>
<?
		$ImageSize  = GetImageSize("../fotos_cliente/foto_$arr[cd_cliente].JPG");
		$Img_w = $ImageSize[0]; 
		$Img_h = $ImageSize[1]; 
?>
		<td align="center">
		<img src="../fotos_cliente/foto_<? echo($arr[cd_cliente]) ?>.JPG" border="1">
		</td>
		<td align="center"><input type="text" size="2" value="<?=$arr[cd_ordem]?>" name="ord[<?=$arr[cd_cliente]?>]" /></td>
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
   	<td align="center"><a href="edicao_cliente.php?cd=<? echo($arr[cd_cliente]) ?>"><img src="tit_adm_editar.gif" width="70" height="23" border="0"></a></td>
	</tr>
<?
	}
?>
      <tr>
        <td colspan="9" height="20"></td>
      </tr>
	<tr bgcolor="#EEEEEE">
	<td align="left" colspan="5">
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
	<span class="style2">Editar uma foto da clientes:</span> Clicar na foto da clientes pretendida<br>
	<span class="style2">Remover uma foto da clientes:</span> Marcar a(s) foto da clientes(s) desejada(s) e clicar em &quot;remover&quot;<br>
	<span class="style2">Publicar uma foto da clientes:</span> Marcar a(s) foto da clientes(s) desejada(s) e clicar em &quot;publicar&quot; (disponibilizar no site) <br>
	<span class="style2">Despublicar uma foto da clientes:</span> Marcar a(s) foto da clientes(s) desejada(s) e clicar em &quot;despublicar&quot; (indisponibilizar no site)
	</div>	</td>
	</tr>
	</form>
</table>