<?
	include "../conectar.php";
	include "sessao.php";
	if($_POST){
		$cod_noticia = $_POST[cod_noticia];
	}
?><head>

<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<form action="gerenciador_noticias.php" method="post">
	<tr> 
<td width="100%" valign="top"><? include("menu.php") ?></td>
   	</tr>
	<tr> 
<td align="center">  <table width="100%" border="1" align="center" cellpadding="0" cellspacing="4">
      <tr align="left">
        <td colspan="9" align="center" class="style2">Gerenciar NOT&Iacute;CIAS
            <?
if(isset($_POST[id])){
	$id = $_POST[id];
	if($_POST[acao] == "Remover"){
		foreach($id as $i){
			$id_query = mysql_query("DELETE FROM noticias WHERE cd_noticia = '$i'");
		}
	}elseif($_POST[acao] == "Publicar"){
		foreach($id as $i){
			$id_query = mysql_query("UPDATE noticias SET bl_publicar='1' WHERE cd_noticia = '$i'");
		}
	}elseif($_POST[acao] == "Despublicar"){
		foreach($id as $i){
			$id_query = mysql_query("UPDATE noticias SET bl_publicar='0' WHERE cd_noticia = '$i'");
		}
	}elseif($_POST[acao] == "Destacar"){
		$id_query = mysql_query("UPDATE noticias SET bl_destaque='0'");
		foreach($id as $i){
			$id_query = mysql_query("UPDATE noticias SET bl_destaque='1' WHERE cd_noticia =  '$i'");
		}
	}elseif(isset($_POST[acao])){
		echo("<p><font color=\"red\"><b>A opera&ccedil;&atilde;o n&atilde;o foi realizada. &Eacute; necess&aacute;rio selecionar o(s) registro(s).</b></font></p>");	
	}
}
if(isset($_POST[ord])){
	$ord = $_POST[ord];
	if($_POST[acao] == "Salvar Ordem"){
		foreach($ord as $o => $cd_ordem){
			$id_query = mysql_query("UPDATE noticias SET cd_ordem='$cd_ordem' WHERE cd_noticia = '$o'");
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
$sql = "SELECT * FROM noticias ORDER BY $novaordem";
$id_query = mysql_query($sql) or die("Erro ao executar consulta");
if (!mysql_num_rows($id_query)) {
	echo("<p><font color=\"red\"><b>N&atilde;o h&aacute; nenhuma not&iacute;cia cadastrada. <a href=\"cadastro_noticia.php\">clique aqui para incluir uma nova</a></b></font></p>");
}else{
?></td>
      </tr>
      <tr>
        <td width="70" align="center">&nbsp;</td>
        <td align="center"><b>Ordem</b></td>
        <td align="center"><b>T&iacute;tulo</b></td>
		<td align="center"><b>Destacada?</b></td>
        <td align="center"><b>Publicada?</b></td>
        <td align="center"><a href="cadastro_noticia.php"><img src="tit_adm_incluir.gif" width="59" height="21" border="0" /></a></td>
      </tr>
      <?
	while($arr = mysql_fetch_assoc($id_query)){
?>
      <tr bgcolor="#CCCCCC">
        <td align="center"><input type="checkbox" value="<? echo($arr[cd_noticia]) ?>" name="id[]" style="border-width: 0px"></td>
        <td align="center"><input type="text" size="2" value="<?=$arr[cd_ordem]?>" name="ord[<?=$arr[cd_noticia]?>]" /></td>
        <?
		$titulo=substr($arr[tit_noticia], 0, 50)."...";
?>
        <td align="center"><? echo($titulo) ?></td>
		<td align="center">
<?
		if ($arr[bl_destaque]){
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
        <td align="center">
          <?
		if ($arr[bl_publicar]){
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
        <td align="center"><a href="edicao_noticia.php?cod=<? echo($arr[cd_noticia]) ?>"><img src="tit_adm_editar.gif" width="70" height="23" border="0"></a></td>
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
		  <input type="submit" value="Destacar" name="acao">
		  <input type="submit" value="Salvar Ordem" name="acao">
    	  <input type="hidden" value="<? echo($arr[cd_noticia]) ?>" name="cod_noticia">
<?
}
?>	
	</td>
      </tr>
    </table>
<div align="left"><strong class="style2">Instru&ccedil;&otilde;es:</strong><br>
<br>
<span class="style2">Editar uma not&iacute;cia:</span> Clicar na not&iacute;cia pretendida<br>
<span class="style2">Remover uma not&iacute;cia:</span> Marcar a(s) not&iacute;cia(s) desejada(s) e clicar em &quot;remover&quot;<br>
<span class="style2">Publicar uma not&iacute;cia:</span> Marcar a(s) not&iacute;cia(s) desejada(s) e clicar em &quot;publicar&quot; (disponibilizar no site) <br>
<span class="style2">Despublicar uma not&iacute;cia:</span> Marcar a(s) not&iacute;cia(s) desejada(s) e clicar em &quot;despublicar&quot; (indisponibilizar no site)</div></td>
</tr>
</form>
</table>