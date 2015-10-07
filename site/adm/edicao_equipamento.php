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
	$cod_foto = $_GET[cd];
	$cod_linha = $_GET[cd_linha];
	$nome_linha = $_GET[nm_linha];
}
if($_POST){
	$cod_foto = $_POST[cd];
	$cod_linha = $_POST[cd_linha];
	$nome_linha = desclinha($cod_linha);
	$id_query = mysql_query("UPDATE equipamentos SET 
							cd_linha = '{$_POST[cd_linha]}',
							ds_equipamento = '{$_POST[ds_equipamento]}',
							ds_codequipamento = '{$_POST[ds_codequipamento]}',
							ds_descricao = '{$_POST[ds_descricao]}'
							WHERE cd_equipamento = '{$_POST[cd]}'
							") or die(mysql_error());
	header("Location: gerenciador_equipamentos.php?cd_linha=$cod_linha&nm_linha=$nome_linha");
}else{
	$sql = "SELECT * FROM equipamentos where cd_equipamento = $cod_foto";
	$id_query = mysql_query($sql);
	$arr = mysql_fetch_assoc($id_query);
	$cod_linha_atual = $arr[cd_linha];
}

?><head>

<link rel="stylesheet" href="style.css" type="text/css">
<script type="text/javascript" src="../fckeditor/fckeditor.js"></script>

</head>

<table align="center" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="edicao_equipamento.php" method="post" enctype="multipart/form-data" name="ed_fot_linhas">
	<tr>
	<td><? include("menu.php") ?></td>
	</tr>
	<tr>
	<td align="left">
	<table width="100%" border="1" align="center" cellpadding="0" cellspacing="10">
    <tr align="left">
	<td colspan="2" align="center" class="style2">Editar EQUIPAMENTO da linha <? echo($nome_linha) ?></td>
	</tr>
	<tr>
	  <td align="right" class="style1">Nome do Produto :</td>
	  <td><input name="ds_equipamento" type="text" id="ds_equipamento" value="<? echo($arr[ds_equipamento]) ?>" size="50" maxlength="200" /></td>
	  </tr>
	<tr>
	  <td align="right" class="style1">Linha: </td>
	  <td><select name="cd_linha" id="cd_linha">
	    <?
	$res_linha = mysql_query("SELECT * FROM linhas ORDER BY ds_linha");
	while ($arr_linha = mysql_fetch_assoc($res_linha)){
?>
	    <option value="<? echo($arr_linha[cd_linha]) ?>"<? if($arr_linha[cd_linha] == $cod_linha_atual ) echo "selected" ?>> <? echo($arr_linha[tit_linha]) ?></option>
	    <?
	}
?>
	    </select></td>
	  </tr>
	<tr>
	<td align="right" class="style1">Informações Técnicas :</td>
	<td align="left" class="style1">&nbsp;</td>
	</tr>
	<tr>
	<td colspan="2" align="left">
<? 
$editor = new FCKeditor("ds_descricao"); //Nomeia a área de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = $arr[ds_descricao];             //Informa o valor inicial do campo, no exemplo está vazio 
$editor-> Width = "95%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?>
	</td>
	</tr>
    <tr align="center">
      <td colspan="2">
        <input type="hidden" name="cd" value="<? echo($arr[cd_equipamento])?>">
        <input type="submit" name="Submit" value="Salvar">
        </td>
    </tr>
    </table>
    <hr align="left" noshade color="#000099">
    <strong class="style1">Instru&ccedil;&otilde;es:</strong><br>    <br>
    <span class="style1">Editar dados:</span> Alterar os campos desejados.<br>
    <span class="style1">Editar uma foto: </span><br>
    Para manter a foto atual -&gt; n&atilde;o mexer<br>
    Para alterar a foto -&gt; Clicar em &quot;procurar&quot;, selecionar a foto desejada (tem de ser foto com extens&atilde;o .JPG)<br>
    Para excluir a foto e deixar sem nenhuma -&gt; Apagar o endere&ccedil;o no campo &quot;foto&quot;<br>    <br>
	<span class="style1">Assim que tiver alterado todos os campos desejados clicar em &quot;Salvar&quot;</span>
	</td>
	</tr>
	<form>
</table>