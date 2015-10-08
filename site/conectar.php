<?php
$serv_local = "mysql.hostinger.com.br";
$usu_local = "u448425872_root";
$senha_local = "12345678";
$banco_local = "u448425872_newt";
$conn = mysql_connect($serv_local,$usu_local,$senha_local) or die("Erro ao conectar"); 
mysql_select_db($banco_local) or die("Erro ao conectar com a base de dados");
?>