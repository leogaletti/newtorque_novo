<?
include "../conectar.php";
include "sessao.php";
include "../fckeditor/fckeditor.php"; //Chama a classe fckeditor
function desclinha($a){
	$sql_linha = mysql_query("SELECT * FROM linhas WHERE cd_linha = $a");
	$arr_linha = mysql_fetch_array($sql_linha);
	return $arr_linha[tit_linha];
}
if($_GET){
	$cod_linha = $_GET[cd_linha];
	$nome_linha = $_GET[nm_linha];
}
if($_POST){
	$cod_linha = $_POST[cd_linha];
	$nome_linha = $_POST[nm_linha];
	$id_query = mysql_query("INSERT INTO equipamentos(cd_linha,ds_codequipamento,ds_equipamento,ds_descricao)
							 VALUES('{$cod_linha}','{$_POST[ds_codequipamento]}','{$_POST[ds_equipamento]}','{$_POST[ds_descricao]}')")
							  or die(mysql_error());
	header("Location: gerenciador_equipamentos.php?cd_linha=$cod_linha&nm_linha=$nome_linha");
}

?><head>

<link rel="stylesheet" href="style.css" type="text/css">
<script type="text/javascript" src="../fckeditor/fckeditor.js"></script>

</head>

<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="cadastro_equipamento.php" method="post" enctype="multipart/form-data" name="cad_fot_linhas">
	<tr>
	<td><? include("menu.php") ?></td>
	</tr>
	<tr>
	<td align="center">
	<table width="100%" border="1" align="center" cellpadding="0" cellspacing="10">
	<tr>
	<td colspan="2" align="center" class="style2">Novo EQUIPAMENTO da linha <? echo($nome_linha) ?></td>
	</tr>
	<tr>
	  <td align="right" class="style1">Nome do Produto :</td>
	  <td height="5"><input name="ds_equipamento" type="text" id="ds_equipamento" value="" size="50" maxlength="150" /></td>
	  </tr>
	<tr>
	  <td align="right" class="style1">Informações Técnicas :</td>
	  <td align="center" class="style1">&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="2">
<? 
$editor = new FCKeditor("ds_descricao"); //Nomeia a &aacute;rea de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = "";             //Informa o valor inicial do campo, no exemplo est&aacute; vazio 
$editor-> Width = "95%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?>
      </td>
	  </tr>
    <tr align="center">
      <td colspan="2">
        <input type="hidden" name="cd_linha" value="<? echo($cod_linha) ?>">
        <input type="hidden" name="nm_linha" value="<? echo($nome_linha) ?>">
        <input type="submit" name="Submit" value="Salvar">
        </td>
    </tr>
    </table>        
    <hr align="left" noshade color="#000099">
	<div align="left"><strong class="style1">Instru&ccedil;&otilde;es:</strong><br><br>
	<span class="style1">Incluir dados:</span> Digitar os valores dos campos desejados.<br>
    <span class="style1">Incluir uma foto:</span><br>
    Para incluir a foto -&gt; Clicar em &quot;procurar&quot;, selecionar a foto desejada (tem de ser foto com extens&atilde;o .JPG)<br>
    Para deixar sem nenhuma -&gt; N&atilde;o mexer no campo &quot;foto&quot;<br><br>
    <span class="style1">Assim que tiver inserido todos os campos desejados clicar em &quot;Salvar&quot;</span>
	</div>
	</td>
	</tr>
	</form>
</table>