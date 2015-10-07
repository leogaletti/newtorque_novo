<?
	include "../conectar.php";
	include "sessao.php";
	if($_POST){
		$cod_servico_executado = $_POST[cd_serv];
		$nome_servico_executado = $_POST[nm_serv];
	}
	if($_GET){
		$cod_servico_executado = $_GET[cd_serv];
		$nome_servico_executado = $_GET[nm_serv];
	}
?><head>
<link rel="stylesheet" href="style.css" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style3 {color: #FF0000; font-weight: bold; }
-->
</style>

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
	<form action="gerenciador_fotos_servicos_executados.php" method="post">
	<tr> 
	<td width="100%" valign="top"><? include("menu.php") ?></td>
	</tr>
	<tr> 
	<td align="center">
	<table width="100%" border="1" align="center" cellpadding="0" cellspacing="4">
      <tr align="left">
        <td colspan="9" align="center" class="style2">Gerenciar de FOTOS do SERVI&Ccedil;O - &quot;<? echo($nome_servico_executado) ?>&quot;          <?
if(isset($_POST[id])){
	$id = $_POST[id];
	if($_POST[acao] == "Remover"){
       	foreach($id as $i){
			$id_query = mysql_query("DELETE FROM fotos_servicos_executados WHERE cd_foto_servico_executado = '$i'");
			unlink("../fotos_servicos_executados/mini_foto_"."$i.JPG");
			unlink("../fotos_servicos_executados/foto_"."$i.JPG");
		}
	}elseif($_POST[acao] == "Publicar"){
       	foreach($id as $i){
			$id_query = mysql_query("UPDATE fotos_servicos_executados SET bl_publicarfs = '1' WHERE cd_foto_servico_executado = '$i'");
		}
	}elseif($_POST[acao] == "Despublicar"){
       	foreach($id as $i){
			$id_query = mysql_query("UPDATE fotos_servicos_executados SET bl_publicarfs = '0' WHERE cd_foto_servico_executado = '$i'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A opera&ccedil;&atilde;o n&atilde;o foi realizada. &Eacute; necess&aacute;rio selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_POST[ord])){
	$ord = $_POST[ord];
	if($_POST[acao] == "Salvar Ordem"){
		foreach($ord as $o => $cd_ordem){
			$id_query = mysql_query("UPDATE fotos_servicos_executados SET cd_ordemfs='$cd_ordem' WHERE cd_foto_servico_executado = '$o'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_GET[ordem])){
	$novaordem = $_GET[ordem];
}else{
	$novaordem = "cd_ordemfs DESC";
}
$id_query = mysql_query("Select * from fotos_servicos_executados inner join servicos_executados on fotos_servicos_executados.cd_servico_executado = servicos_executados.cd_servico_executado WHERE fotos_servicos_executados.cd_servico_executado = $cod_servico_executado ORDER BY $novaordem") or die("Erro ao executar consulta");
if (!mysql_num_rows($id_query)) {
	echo("<p><font color=\"red\"><b>N&atilde;o h&aacute; nenhuma foto inclu&iacute;da neste &aacute;lbum. <a href=\"cadastro_fotos_servico_executado.php?cd_serv=$cod_servico_executado&nm_serv=$nome_servico_executado\">clique aqui para incluir uma nova</a></b></font></p>");
}else{
?></td>
      </tr>
      <tr>
        <td width="70" align="center">&nbsp;</td>
        <td align="center"><b>Foto</b></td>
        <td align="center"><b>Ordem de Aparecimento</b></td>
        <td align="center"><b>Legenda</b></td>
        <td align="center"><b>Publicada?</b></td>
        <td align="center"><a href="cadastro_fotos_servico_executado.php?cd_serv=<? echo($cod_servico_executado) ?>&amp;nm_serv=<? echo($nome_servico_executado) ?>"><img src="tit_adm_incluir.gif" width="59" height="21" border="0" /></a></td>
      </tr>
      <?
	while($arr = mysql_fetch_assoc($id_query)){
?>
      	<tr bgcolor="#CCCCCC">
		<td align="center"><input type="checkbox" value="<? echo($arr[cd_foto_servico_executado]) ?>" name="id[]" style="border-width: 0px"></td>
        <td align="center">
<?
			$ImageSize  = GetImageSize("../fotos_servicos_executados/foto_$arr[cd_foto_servico_executado].JPG");
			$Img_w = $ImageSize[0]; 
			$Img_h = $ImageSize[1]; 
?>
        <a href="javascript:foto('../fotos_servicos_executados/foto_<? echo($arr[cd_foto_servico_executado]) ?>.JPG','<? echo($Img_w) ?>','<? echo($Img_h) ?>')"> <img src="../fotos_servicos_executados/mini_foto_<? echo($arr[cd_foto_servico_executado]) ?>.JPG" alt="Clique para ver a foto em tamanho real" border="0"></a>
        </td>
		<td align="center"><input type="text" size="2" value="<?=$arr[cd_ordemfs]?>" name="ord[<?=$arr[cd_foto_servico_executado]?>]" /></td>
        <td align="center"><? echo($arr[ds_legenda]) ?></td>
        <td align="center">
          <?
	if ($arr[bl_publicarfs]){
?>
      Sim
      <?
	}else{
?>
      N&atilde;o
      <?
	}	  
?>
        </td>
        <td align="center"><a href="edicao_fotos_servico_executado.php?cd=<? echo($arr[cd_foto_servico_executado]) ?>&amp;cd_serv=<? echo($arr[cd_servico_executado]) ?>&amp;nm_serv=<? echo($arr[tit_servico_executado]) ?>"><img src="tit_adm_editar.gif" width="70" height="23" border="0"></a></td>
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
          <input type="hidden" value="<? echo($cod_servico) ?>" name="cd_serv">
          <input type="hidden" value="<? echo($nome_servico) ?>" name="nm_serv">
<?
}
?></td>
      </tr>
    </table>
	<div align="left"><strong class="style2">Instru&ccedil;&otilde;es:</strong><br><br>
	<span class="style2">Editar uma foto da servico:</span> Clicar na foto da servico pretendida<br>
	<span class="style2">Remover uma foto da servico:</span> Marcar a(s) foto da servico(s) desejada(s) e clicar em &quot;remover&quot;<br>
	<span class="style2">Publicar uma foto da servico:</span> Marcar a(s) foto da servico(s) desejada(s) e clicar em &quot;publicar&quot; (disponibilizar no site) <br>
	<span class="style2">Despublicar uma foto da servico:</span> Marcar a(s) foto da servico(s) desejada(s) e clicar em &quot;despublicar&quot; (indisponibilizar no site)
	</div>	</td>
	</tr>
	</form>
</table>