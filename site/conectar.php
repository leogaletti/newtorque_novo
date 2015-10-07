<?php
$serv_local = "mysql.newtorque.com.br";
$usu_local = "newtorque";
$senha_local = "mce2495";
$banco_local = "newtorque";
$conn = mysql_connect($serv_local,$usu_local,$senha_local) or die("Erro ao conectar"); 
mysql_select_db($banco_local) or die("Erro ao conectar com a base de dados");
?>