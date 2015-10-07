<?
	include "../conectar.php";
	include "sessao.php";
?><head>

<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<form action="gerenciador_videos.php" method="post">
	<tr> 
<td width="100%" valign="top"><? include("menu.php") ?></td>
   	</tr>
	<tr> 
<td align="center">  <table width="100%" border="1" align="center" cellpadding="4" cellspacing="4" class="style1">
	<tr align="left">
	  <td colspan="9" align="center" class="style2">Gerenciar V&Iacute;DEOS	    <?
if(isset($_POST[id])){
	$id = $_POST[id];
	if($_POST[acao] == "Remover"){
		foreach($id as $i){
			$id_query = mysql_query("DELETE FROM videos WHERE cd_video = '$i'");
		}
	}elseif($_POST[acao] == "Publicar"){
		foreach($id as $i){
			$id_query = mysql_query("UPDATE videos SET bl_publicar='1' WHERE cd_video = '$i'");
		}
	}elseif($_POST[acao] == "Despublicar"){
		foreach($id as $i){
			$id_query = mysql_query("UPDATE videos SET bl_publicar='0' WHERE cd_video = '$i'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A operação não foi realizada. É necessário selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_POST[ord])){
	$ord = $_POST[ord];
	if($_POST[acao] == "Salvar Ordem"){
		foreach($ord as $o => $cd_ordem){
			$id_query = mysql_query("UPDATE videos SET cd_ordem='$cd_ordem' WHERE cd_video = '$o'");
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
$sql = "SELECT * FROM videos ORDER BY $novaordem";
$id_query = mysql_query($sql) or die("Erro ao executar consulta");
if (!mysql_num_rows($id_query)) {
	echo("<p><font color=\"red\"><b>Não há nenhum video cadastrado. <a href=\"cadastro_video.php\">clique aqui para incluir um novo</a></b></font></p>");
}else{
?></td>
	  </tr>
	<tr>
	<td align="center">&nbsp;</td>
	<td align="center"><b>Ordem</b></td>
	<td align="center"><b>Data de Publicação</b></td>
	<td align="center"><b>T&iacute;tulo</b></td>
	<td align="center"><b>Publicada?</b></td>
	<td width="70" align="center"><a href="cadastro_video.php"><img src="tit_adm_incluir.gif" width="59" height="21" border="0" /></a></td>
	</tr>
<?
	while($arr = mysql_fetch_assoc($id_query)){
		if(!empty($arr[ds_data])){
			$novadata = substr($arr[ds_data],8,2) ."-". substr($arr[ds_data],5,2) ."-". substr($arr[ds_data],0,4); 
		}
?>
		<tr bgcolor="#CCCCCC">
		<td align="center"><input type="checkbox" value="<? echo($arr[cd_video]) ?>" name="id[]" style="border-width: 0px"></td>
		<td align="center"><input type="text" size="2" value="<?=$arr[cd_ordem]?>" name="ord[<?=$arr[cd_video]?>]" /></td>
		<td align="center"></a><? echo($novadata) ?></td>
		<td align="center"><? echo($arr[ds_titulo]) ?></td>
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
	   	<td align="center"><a href="edicao_video.php?cod=<? echo($arr[cd_video]) ?>"><img src="tit_adm_editar.gif" width="70" height="23" border="0"></a></td>
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
<?
}
?>
		</td>
	  </tr>
</table>
<div align="left"><strong class="style2">Instru&ccedil;&otilde;es:</strong><br>
<br>
<span class="style2">Editar um video:</span> Clicar no video pretendido<br>
<span class="style2">Remover um video:</span> Marcar o(s) video(s) desejado(s) e clicar em &quot;remover&quot;<br>
<span class="style2">Publicar um video:</span> Marcar o(s) video(s) desejado(s) e clicar em &quot;publicar&quot; (disponibilizar no site) <br>
<span class="style2">Despublicar um video:</span> Marcar o(s) video(s) desejado(s) e clicar em &quot;despublicar&quot; (indisponibilizar no site)</div></td>
</tr>
</form>
</table>