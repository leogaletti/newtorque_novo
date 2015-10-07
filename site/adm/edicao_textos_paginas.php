<?
include "../conectar.php";
include "sessao.php";
include "../fckeditor/fckeditor.php"; //Chama a classe fckeditor
if($_POST){
 	$id_query = mysql_query("UPDATE paginas SET ds_pag_servicos = '{$_POST[ds_pag_servicos]}',
							ds_pag_servexec = '{$_POST[ds_pag_servexec]}',
							ds_pag_equipam = '{$_POST[ds_pag_equipam]}',
							ds_pag_clientes = '{$_POST[ds_pag_clientes]}',
							ds_pag_videos = '{$_POST[ds_pag_videos]}',
							ds_pag_localizacao = '{$_POST[ds_pag_localizacao]}',
							ds_pag_faleconosco = '{$_POST[ds_pag_faleconosco]}',
							ds_pag_trabconosco = '{$_POST[ds_pag_trabconosco]}'") or die(mysql_error());
 	header("Location: menu.php");
}else{
 	$sql ="SELECT * FROM paginas";
 	$id_query = mysql_query($sql);
 	$arr = mysql_fetch_assoc($id_query);
}

?><head>

<script type="text/javascript" src="../fckeditor/fckeditor.js"></script>

<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<form action="edicao_textos_paginas.php" method="post" enctype="multipart/form-data">
	<tr>
	  <td><? include("menu.php") ?></td>
	</tr>
	<tr>
	<td align="center">
	<table width="100%" border="1" align="center" cellpadding="0" cellspacing="10">
    <tr> 
    <td align="center">
 	</td>
    </tr>
    <tr>
    <td align="left" class="style2">Edi&ccedil;&atilde;o do texto introdut&oacute;rio da  P&aacute;gina SERVI&Ccedil;OS</td>
	</tr>
	<tr>
	  <td align="center">
  <? 
$editor = new FCKeditor("ds_pag_servicos"); //Nomeia a área de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = $arr[ds_pag_servicos];             //Informa o valor inicial do campo, no exemplo está vazio 
$editor-> Width = "95%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?>
	    </td>
	  </tr>
	<tr>
	  <td align="left" class="style2">Edi&ccedil;&atilde;o do texto introdut&oacute;rio da  P&aacute;gina SERVI&Ccedil;OS EXECUTADOS</td>
	  </tr>
	<tr>
	  <td align="center"><? 
$editor = new FCKeditor("ds_pag_servexec"); //Nomeia a &aacute;rea de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = $arr[ds_pag_servexec];             //Informa o valor inicial do campo, no exemplo est&aacute; vazio 
$editor-> Width = "95%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?></td>
	  </tr>
	<tr>
	  <td align="left" class="style2">Edi&ccedil;&atilde;o do texto introdut&oacute;rio da  P&aacute;gina EQUIPAMENTOS</td>
	  </tr>
	<tr>
	  <td align="center"><? 
$editor = new FCKeditor("ds_pag_equipam"); //Nomeia a &aacute;rea de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = $arr[ds_pag_equipam];             //Informa o valor inicial do campo, no exemplo est&aacute; vazio 
$editor-> Width = "95%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?></td>
	  </tr>
	<tr>
	  <td align="left" class="style2">Edi&ccedil;&atilde;o do texto introdut&oacute;rio da  P&aacute;gina CLIENTES</td>
	  </tr>
	<tr>
	  <td align="center"><? 
$editor = new FCKeditor("ds_pag_clientes"); //Nomeia a &aacute;rea de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = $arr[ds_pag_clientes];             //Informa o valor inicial do campo, no exemplo est&aacute; vazio 
$editor-> Width = "95%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?></td>
	  </tr>
	<tr>
	  <td align="left" class="style2">Edi&ccedil;&atilde;o do texto introdut&oacute;rio da  P&aacute;gina VÍDEOS</td>
	  </tr>
	<tr>
	  <td align="center"><? 
$editor = new FCKeditor("ds_pag_videos"); //Nomeia a &aacute;rea de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = $arr[ds_pag_videos];             //Informa o valor inicial do campo, no exemplo est&aacute; vazio 
$editor-> Width = "95%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?></td>
	  </tr>
	<tr>
	  <td align="left" class="style2">Edi&ccedil;&atilde;o do texto introdut&oacute;rio da  P&aacute;gina LOCALIZA&Ccedil;&Atilde;O</td>
	  </tr>
	<tr>
	  <td align="center"><? 
$editor = new FCKeditor("ds_pag_localizacao"); //Nomeia a &aacute;rea de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = $arr[ds_pag_localizacao];             //Informa o valor inicial do campo, no exemplo est&aacute; vazio 
$editor-> Width = "95%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?></td>
	  </tr>
	<tr>
	  <td align="left" class="style2">Edi&ccedil;&atilde;o do texto introdut&oacute;rio da  P&aacute;gina FALE CONOSCO</td>
	  </tr>
	<tr>
	  <td align="center"><? 
$editor = new FCKeditor("ds_pag_faleconosco"); //Nomeia a &aacute;rea de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = $arr[ds_pag_faleconosco];             //Informa o valor inicial do campo, no exemplo est&aacute; vazio 
$editor-> Width = "95%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?></td>
	  </tr>
	<tr>
	  <td align="left" class="style2">Edi&ccedil;&atilde;o do texto introdut&oacute;rio da  P&aacute;gina TRABALHE CONOSCO</td>
	  </tr>
	<tr>
	  <td align="center"><? 
$editor = new FCKeditor("ds_pag_trabconosco"); //Nomeia a &aacute;rea de texto
$editor-> BasePath = "../fckeditor/";  //Informa a pasta do FKC Editor
$editor-> Value = $arr[ds_pag_trabconosco];             //Informa o valor inicial do campo, no exemplo est&aacute; vazio 
$editor-> Width = "95%";          //informa a largura do editor  
$editor-> Height = "500";         //informa a altura do editor
$editor-> Create();               // Cria o editor 
?></td>
	  </tr>
	<tr>
	  <td align="center"><input type="submit" name="Submit" value="Atualizar"></td>
	  </tr>
    </table>          
	<hr noshade color="#000099">
    <div align="left"><strong>Instru&ccedil;&otilde;es:</strong><br><br>
	<span class="style1">Editar dados:</span> Alterar os campos desejados.<br><br>
	<span class="style1">Assim que tiver alterado todos os campos desejados clicar em &quot;Salvar&quot;</span>
	</div>
	</td>
	</tr>
	</form>
</table>