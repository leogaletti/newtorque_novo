<?
include "../conectar.php";
include "sessao.php";
?><head>
<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>##  &Aacute;rea Administrativa do site ##</title>
</head>

<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="gerenciador_servicos_executados.php" method="post">
	<tr> 
	<td width="100%" valign="top"><? include("menu.php") ?></td>
   	</tr>
	<tr> 
	<td align="center"><table width="100%" border="1" align="center" cellpadding="0" cellspacing="4">
	<tr align="left">
	  <td colspan="9" align="center" class="style2">Gerenciar SERVI&Ccedil;OS
	    <?
if(isset($_POST[id])){
	$id = $_POST[id];
	if($_POST[acao] == "Remover"){
       	foreach($id as $i){
			$sql = "SELECT * FROM fotos_servicos_executados where cd_servico_executado = '$i'";
			$id_query = mysql_query($sql) or die("Erro ao executar consulta");
			if (mysql_num_rows($id_query)) {
				echo("<p><font color=\"red\"><b>Ainda existe(m) fotos(s) cadastrado(s) neste Serviço. Exclua-a(s) primeiro.</b></font></p>");
		 	}else{
			   $id_query = mysql_query("DELETE FROM servicos_executados WHERE cd_servico_executado = '$i'");
		 	}
		}
	}elseif($_POST[acao] == "Publicar"){
       	foreach($id as $i){
			$id_query = mysql_query("UPDATE servicos_executados SET bl_publicars = '1' WHERE cd_servico_executado = '$i'");
		}
	}elseif($_POST[acao] == "Despublicar"){
       	foreach($id as $i){
			$id_query = mysql_query("UPDATE servicos_executados SET bl_publicars = '0' WHERE cd_servico_executado = '$i'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_POST[ord])){
	$ord = $_POST[ord];
	if($_POST[acao] == "Salvar Ordem"){
		foreach($ord as $o => $cd_ordem){
			$id_query = mysql_query("UPDATE servicos_executados SET cd_ordems='$cd_ordem' WHERE cd_servico_executado = '$o'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_GET[ordem])){
	$novaordem = $_GET[ordems];
}else{
	$novaordem = "cd_ordems";
}
$sql = "SELECT * FROM servicos_executados ORDER BY $novaordem";
$id_query = mysql_query($sql) or die("Erro ao executar consulta");
if (!mysql_num_rows($id_query)) {
	echo("<p><font color=\"red\"><b>Não há nenhum Serviço cadastrado. <a href=\"cadastro_servico_executado.php\">clique aqui para incluir um novo</a></b></font></p>");
}else{
?></td>
	  </tr>
	<tr>
	<td width="70" align="center">&nbsp;</td>
	<td align="center"><b>Ordem</b></td>
	<td align="center"><b>Servi&ccedil;o</b></td>
	<td align="center"><b>Gerenciar Fotos</b></td>
	<td align="center"><b>Publicada?</b></td>
	<td align="center"><a href="cadastro_servico_executado.php"><img src="tit_adm_incluir.gif" width="59" height="21" border="0" /></a></td>
	</tr>
<?
	while($arr = mysql_fetch_assoc($id_query)){
		$sql_fotos_servicos_executados = "SELECT * FROM servicos_executados inner join fotos_servicos_executados on servicos_executados.cd_servico_executado = fotos_servicos_executados.cd_servico_executado WHERE fotos_servicos_executados.cd_servico_executado = $arr[cd_servico_executado]";
		$id_query_fotos_servicos_executados = mysql_query($sql_fotos_servicos_executados);
		$total_fotos_serv = mysql_num_rows($id_query_fotos_servicos_executados);
?>
	<tr bgcolor="#CCCCCC">
	<td align="center"><input type="checkbox" value="<? echo($arr[cd_servico_executado]) ?>" name="id[]" style="border-width: 0px"></td>
	<td align="center"><input type="text" size="2" value="<?=$arr[cd_ordems]?>" name="ord[<?=$arr[cd_servico_executado]?>]" /></td>
	<td align="left"><? echo($arr[tit_servico_executado]) ?></td>
	<td align="center"><a href="gerenciador_fotos_servicos_executados.php?cd_serv=<? echo($arr[cd_servico_executado]) ?>&nm_serv=<? echo($arr[tit_servico_executado]) ?>"><img src="tit_fotos.gif" width="80" height="23" border="0"></a><strong> (<? echo($total_fotos_serv); ?>) </strong></td>
	<td align="center">
<?
	if ($arr[bl_publicars]){
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
   	<td align="center"><a href="edicao_servico_executado.php?cod=<? echo($arr[cd_servico_executado]) ?>"><img src="tit_adm_editar.gif" width="70" height="23" border="0"></a></td>
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
	<span class="style2">Editar um servico:</span> Clicar no servico pretendido<br>
	<span class="style2">Remover um servico:</span> Marcar o(s) servico(s) desejado(s) e clicar em &quot;remover&quot;<br>
	<span class="style2">Publicar um servico:</span> Marcar o(s) servico(s) desejado(s) e clicar em &quot;publicar&quot; (disponibilizar no site) <br>
	<span class="style2">Despublicar um servico:</span> Marcar o(s) servico(s) desejado(s) e clicar em &quot;despublicar&quot; (indisponibilizar no site)
	</div>	</td>
	</tr>
	</form>
</table>