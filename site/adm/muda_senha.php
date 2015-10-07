<?
	include "../conectar.php";
	include("sessao.php");
	if($_POST){
		$id_query2 = mysql_query("UPDATE usuario SET vSenha = '{$_POST[novasenha]}'
								WHERE vUsuario = '{$_SESSION[Usuario]}'") or die(mysql_error());
		header("Location: index.php");
	}
?><head>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>


<br>
<table width=100% border=0 align="center" cellpadding=0 cellspacing=0>
  <tr>
    <td>
      <? include("menu.php") ?></td>
    <br>
  <tr>
    <td width=80% valign=top>
      <!-- LINKS DE RODAP&Eacute; -->    </td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="10" cellspacing="0">
  <tr>
    <td align="center" bgcolor="#FFFFFF"><table width="100%" border="1" align="center" cellpadding="0" cellspacing="4" class="style1">
      <form action="muda_senha.php" method="post" name="form" id="form" onsubmit="return valida(this)">
        <tr>
          <td colspan="2" align="center" class="style2">Alterar Senha de Acesso</td>
          </tr>
        <tr bgcolor="#CCCCCC">
          <td width="100" align="left">Usu&aacute;rio:</td>
          <td width="330"><? echo($_SESSION[Usuario]) ; ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td align="left">Senha atual:</td>
          <td><? echo($_SESSION[Senha]) ; ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td align="left">Nova senha:</td>
          <td><input name="novasenha" type="password" id="novasenha" size="15" maxlength="10" /></td>
        </tr>
        <tr align="center">
          <td colspan="2"><hr noshade="noshade" color="#000099" /></td>
        </tr>
        <tr align="center">
          <td colspan="2"><input type="submit" name="Submit" value="Alterar Senha" /></td>
        </tr>
      </form>
    </table></td>
  </tr>
</table>
