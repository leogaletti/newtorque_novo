<?
include "../conectar.php";
session_start();
if($_SESSION){
	setcookie('Usuario', $_SESSION['Usuario'], 0);
	$id_query = mysql_query("SELECT * FROM usuario WHERE vUsuario = '{$_SESSION['Usuario']}' AND vSenha = ('{$_SESSION['Senha']}')");
	if(!$id_query){
		header("Location: index.php");
	}
}else{
    header("Location: index.php");
}
?>