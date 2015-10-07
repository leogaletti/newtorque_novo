<?
include "../conectar.php";
include "sessao.php";
?><head>
<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="gerenciador_linhas.php" method="post">
	<tr> 
	<td width="100%" valign="top"><? include("menu.php") ?></td>
   	</tr>
	<tr> 
	<td align="center"><table width="100%" border="1" align="center" cellpadding="0" cellspacing="4">
	<tr align="left">
	  <td colspan="9" align="center" class="style2">Gerenciar LINHAS de Equipamentos
<?
if(isset($_POST[id])){
	$id = $_POST[id];
	if($_POST[acao] == "Remover"){
       	foreach($id as $i){
			$sql = "SELECT * FROM equipamentos where cd_linha = '$i'";
			$id_query = mysql_query($sql) or die("Erro ao executar consulta");
			if (mysql_num_rows($id_query)) {
				echo("<p><font color=\"red\"><b>Ainda existe(m) equipamento(s) cadastrado(s) nesta Linha. Exclua-o(s) primeiro.</b></font></p>");
		 	}else{
			   $id_query = mysql_query("DELETE FROM linhas WHERE cd_linha = '$i'");
		 	}
		}
	}elseif($_POST[acao] == "Publicar"){
       	foreach($id as $i){
			$id_query = mysql_query("UPDATE linhas SET bl_publicar='1' WHERE cd_linha = '$i'");
		}
	}elseif($_POST[acao] == "Despublicar"){
       	foreach($id as $i){
			$id_query = mysql_query("UPDATE linhas SET bl_publicar='0' WHERE cd_linha = '$i'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_POST[ord])){
	$ord = $_POST[ord];
	if($_POST[acao] == "Salvar Ordem"){
		foreach($ord as $o => $cd_ordem){
			$id_query = mysql_query("UPDATE linhas SET cd_ordem='$cd_ordem' WHERE cd_linha = '$o'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
$sql = "SELECT * FROM linhas ORDER BY cd_ordem";
$id_query = mysql_query($sql) or die("Erro ao executar consulta");
if (!mysql_num_rows($id_query)) {
	echo("<p><font color=\"red\"><b>Não há nenhuma Linha de Equipamentos cadastrada. <a href=\"cadastro_linha.php\">clique aqui para incluir uma nova</a></b></font></p>");
}else{
?></td>
	  </tr>
	<tr>
	<td width="40" align="center">&nbsp;</td>
	<td width="45" align="center"><b>Ordem</b></td>
	<td align="center"><b>Linha</b></td>
	<td align="center"><b>Gerenciar Equipamentos</b></td>
	<td align="center"><b>Publicada?</b></td>
	<td width="70" align="center"><a href="cadastro_linha.php"><img src="tit_adm_incluir.gif" width="59" height="21" border="0" /></a></td>
	</tr>
<?
	while($arr = mysql_fetch_assoc($id_query)){
		$sql_fotos_linha = "SELECT * FROM equipamentos inner join linhas on equipamentos.cd_linha = linhas.cd_linha WHERE equipamentos.cd_linha = $arr[cd_linha]";
		$id_query_fotos_linha = mysql_query($sql_fotos_linha);
		$total_fotos_linha = mysql_num_rows($id_query_fotos_linha);
?>
		<tr bgcolor="#CCCCCC">
		<td align="center"><input type="checkbox" value="<? echo($arr[cd_linha]) ?>" name="id[]" style="border-width: 0px"></td>
		<td align="center"><input type="text" size="2" value="<?=$arr[cd_ordem]?>" name="ord[<?=$arr[cd_linha]?>]" /></td>
	<td align="left"><? echo($arr[tit_linha]) ?></td>
	<td align="left"><a href="gerenciador_equipamentos.php?cd_linha=<? echo($arr[cd_linha]) ?>&nm_linha=<? echo($arr[tit_linha]) ?>"><img src="tit_equipamentos.gif" width="130" height="23" border="0"></a><strong> (<? echo($total_fotos_linha); ?>) </strong></td>
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
   	<td align="center"><a href="edicao_linha.php?cod=<? echo($arr[cd_linha]) ?>"><img src="tit_adm_editar.gif" width="70" height="23" border="0"></a></td>
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
	<span class="style2">Editar uma linha:</span> Clicar no bot&atilde;o &quot;editar&quot; na frente da Linha pretendida<br>
	<span class="style2">Remover uma linha:</span> Marcar a(s) caixa(s) na frente da(s) linha(s) pretendida(s) e clicar em &quot;remover&quot;<br>
	<span class="style2">Publicar uma linha:</span> Marcar a(s) caixa(s) na frente da(s) linha(s) pretendida(s) e clicar em &quot;publicar&quot; (disponibilizar no site) <br>
	<span class="style2">Despublicar uma linha:</span> Marcar a(s) caixa(s) na frente da(s) linha(s) pretendida(s) e clicar em &quot;despublicar&quot; (indisponibilizar no site)
	</div>	</td>
	</tr>
	</form>
</table>