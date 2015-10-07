<?
session_start();
include "../conectar.php";

function anti_injectioner($sql){

// remove palavras que contenham sintaxe sql
$sql = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|s\\\\_-=.,}~^)/i", '', $sql);
$sql = trim($sql);//limpa espaços vazio
$sql = strip_tags($sql);//tira tags html e php
$sql = addslashes($sql);//Adiciona barras invertidas a uma string
$sql = preg_replace("/[^0-9a-zA-Z\-]/", "", $sql);
return $sql;
}
	

if($_POST){
	$Usuario = anti_injectioner($_POST[Usuario]); 
	$Senha = anti_injectioner($_POST[Senha]); 
	if(empty($Usuario) || empty($Senha)) {
		$erro = "Informe o Usuário e a Senha.";
	}else{	
		$id_query = mysql_query("SELECT * FROM usuario WHERE vUsuario = '{$Usuario}'");
		if(mysql_num_rows($id_query)){
			$arr = mysql_fetch_assoc($id_query);
			if($arr[vSenha] == $Senha){
				$_SESSION[Usuario] = $Usuario;
				$_SESSION[Senha] = $Senha;				
				header("Location: menu.php");
			}else{
				$erro = "Senha inválida.";
			}
		}else{
			$erro = "Senha inválida ou Usuário não autorizado.";
		}
	}
}
?><head>
<title>## Gerenciador de conteúdo do site ##</title>
<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<table width="100%" height="150" border="0" align="center" cellpadding="0" cellspacing="0" class="style3">
  <tr bgcolor="#000033">
    <td width="500" rowspan="2" align="center"><img src="logo.png" alt="" width="300" height="100" /></td>
    <td height="50" align="center"><strong>Gerenciador de conte&uacute;do do site</strong></td>
  </tr>
  <tr>
    <td bgcolor="#000033">      <table width="200" border="0" align="center" cellpadding="2" cellspacing="0" class="style3">
      <form action="index.php" method="post" name="" id="">
        <tr>
          <td align="right" bgcolor="#FF0000">Usu&aacute;rio:</td>
          <td align="left" bgcolor="#CA1D20">
            <input name="Usuario" type="text" size="15" maxlength="10" value="<? echo($_COOKIE['Usuario']); ?>"></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#FF0000">Senha:</td>
          <td align="left" bgcolor="#CA1D20">
            <input name="Senha" type="password" size="15" maxlength="10"></td>
        </tr>
          <tr align="center">
            <td colspan="2" bgcolor="#FF0000"><input name="submit" type="submit" value="Entrar" /></td>
          </tr>
          <tr align="center">
            <td colspan="2"><span style="color:#F00"><?
	if(isset($erro)){
		echo("$erro");
	}
?></span></td>
          </tr>
      </form>
    </table></td>
  </tr>
</table>
