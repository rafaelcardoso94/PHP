<?php
// definições de host, database, usuário e senha
$host = "server";
$db   = "nome-banco";
$user = "user-banco";
$pass = "pass";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
print "Conexão Efetuada com sucesso!";
?>
