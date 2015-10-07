<?
	include "../conectar.php";
	include "sessao.php";
	if($_POST){
		$cod_linha = $_POST[cd_linha];
		$nome_linha = $_POST[nm_linha];
	}
	if($_GET){
		$cod_linha = $_GET[cd_linha];
		$nome_linha = $_GET[nm_linha];
	}
?><head>
<link rel="stylesheet" href="style.css" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="JavaScript">

function foto(img, w, h){
  obj=window.open('','', config='resizable=no,location=no,directories=no,status=no,toolbar=no,menubar=no,scrollbars=no,width=' + w  + ',height=' + h + ',top=0,left=0');
  obj.document.write('<html><head><title># ADM - Produtos#</title><link rel="stylesheet" href="style.css" type="text/css"></head>');
  obj.document.write('<body class="fundo_painel" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">');
  obj.document.write('<a href="javascript:window.close()"><img src=' + img + ' border="0" title="Clique para fechar"></a></body></html><br>');
} 

</script>

</head>

<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="gerenciador_equipamentos.php" method="post">
	<tr> 
	<td width="100%" valign="top"><? include("menu.php") ?></td>
	</tr>
	<tr> 
	<td align="center"> <table width="100%" border="1" align="center" cellpadding="0" cellspacing="4">
	<tr align="left">
	  <td colspan="10" align="center" class="style2">Gerenciar EQUIPAMENTOS da linha - <? echo($nome_linha) ?>
        <?
if(isset($_POST[id])){
	$id = $_POST[id];
	if($_POST[acao] == "Remover"){
       	foreach($id as $i){
			$id_query = mysql_query("DELETE FROM equipamentos WHERE cd_equipamento = '$i'");
		}
	}elseif($_POST[acao] == "Publicar"){
       	foreach($id as $i){
			$id_query = mysql_query("UPDATE equipamentos SET bl_publicare='1' WHERE cd_equipamento = '$i'");
		}
	}elseif($_POST[acao] == "Despublicar"){
       	foreach($id as $i){
			$id_query = mysql_query("UPDATE equipamentos SET bl_publicare='0' WHERE cd_equipamento = '$i'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_POST[ord])){
	$ord = $_POST[ord];
	if($_POST[acao] == "Salvar Ordem"){
		foreach($ord as $o => $cd_ordem){
			$id_query = mysql_query("UPDATE equipamentos SET cd_ordeme='$cd_ordem' WHERE cd_equipamento = '$o'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_GET[ordem])){
	if($_GET[ordem] == "codequipamento"){
		$sql = "Select * from linhas INNER JOIN equipamentos ON linhas.cd_linha = equipamentos.cd_linha WHERE equipamentos.cd_linha = $cod_linha ORDER BY equipamentos.cd_linha,equipamentos.ds_codequipamento";
	}
}else{
	$sql = "Select * from linhas INNER JOIN equipamentos ON linhas.cd_linha = equipamentos.cd_linha WHERE equipamentos.cd_linha = $cod_linha ORDER BY equipamentos.cd_linha,cd_ordeme";
}
$id_query = mysql_query($sql) or die("Erro ao executar consulta");
if (!mysql_num_rows($id_query)) {
	echo("<p><font color=\"red\"><b>Não há nenhum equipamento incluído para esta linha. <a href=\"cadastro_equipamento.php?cd_linha=$cod_linha&nm_linha=$nome_linha\">clique aqui para incluir um novo</a></b></font></p>");
}else{
?></td>
	  </tr>
	<tr>
	<td align="center">&nbsp;</td>
	<td width="45" align="center"><b>Ordem</b></td>
	<td align="center"><b>Equipamento</b></td>
	<td align="center"><b>Gerenciar Fotos</b></td>
	<td align="center"><b>Publicada?</b></td>
	<td width="70" align="center"><a href="cadastro_equipamento.php?cd_linha=<? echo($cod_linha) ?>&nm_linha=<? echo($nome_linha) ?>"><img src="tit_adm_incluir.gif" width="59" height="21" border="0" /></a></td>
	</tr>
<?
	while($arr = mysql_fetch_assoc($id_query)){
		$sql_fotos_equip = "SELECT * FROM fotos_equipamentos inner join equipamentos on fotos_equipamentos.cd_equipamento = equipamentos.cd_equipamento WHERE fotos_equipamentos.cd_equipamento = $arr[cd_equipamento]";
		$id_query_fotos_equip = mysql_query($sql_fotos_equip);
		$total_fotos_equip = mysql_num_rows($id_query_fotos_equip);
?>
	<tr bgcolor="#CCCCCC">
	<td align="center"><input type="checkbox" value="<? echo($arr[cd_equipamento]) ?>" name="id[]" style="border-width: 0px"></td>
		<td align="center"><input type="text" size="2" value="<?=$arr[cd_ordeme]?>" name="ord[<?=$arr[cd_equipamento]?>]" /></td>
	<td align="left"><? echo($arr[ds_equipamento]) ?></td>
	<td align="center"><a href="gerenciador_fotos_equipamentos.php?cd_equipamento=<? echo($arr[cd_equipamento]) ?>&ds_equipamento=<? echo($arr[ds_equipamento]) ?>&cd_linha=<? echo($arr[cd_linha]) ?>&nm_linha=<? echo($arr[tit_linha]) ?>"><img src="tit_fotos.gif" border="0"></a><strong> (<? echo($total_fotos_equip) ?>) </strong></td>
	<td align="center">
<?
	if ($arr[bl_publicare]){
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
   	<td align="center"><a href="edicao_equipamento.php?cd=<? echo($arr[cd_equipamento]) ?>&cd_linha=<? echo($arr[cd_linha]) ?>&nm_linha=<? echo($arr[tit_linha]) ?>"><img src="tit_adm_editar.gif" width="70" height="23" border="0"></a></td>
	</tr>
<?
	}
?>
      <tr>
        <td colspan="9" height="20"></td>
      </tr>
	<tr bgcolor="#EEEEEE">
	<td align="left" colspan="10">
	<input type="submit" value="Remover" name="acao">
	<input type="submit" value="Publicar" name="acao">
	<input type="submit" value="Despublicar" name="acao">
	<input type="submit" value="Salvar Ordem" name="acao">
    <input type="hidden" value="<? echo($cod_linha) ?>" name="cd_linha">
    <input type="hidden" value="<? echo($nome_linha) ?>" name="nm_linha">
<?
}
?></td>
	  </tr>
	</table>
	<div align="left"><strong class="style2">Instru&ccedil;&otilde;es:</strong><br><br>
	<span class="style2">Editar um equipamento:</span> Clicar no bot&atilde;o &quot;editar&quot; na frente do equipamento  pretendido<br>
	<span class="style2">Remover um equipamento:</span> Selecionar a(s) caixa(s) na frente do(s) equipamento(s) pretendido(s) e clicar em &quot;remover&quot;<br>
	<span class="style2">Publicar um equipamento:</span> Selecionar a(s) caixa(s) na frente do(s)  equipamento(s) pretendido(s) e clicar em &quot;publicar&quot; (disponibilizar no site) <br>
	<span class="style2">Despublicar um equipamento:</span> Selecionar a(s) caixa(s) na frente do(s)  equipamento(s) pretendido(s) e clicar em &quot;despublicar&quot; (indisponibilizar no site)
	</div>	</td>
	</tr>
	</form>
</table>