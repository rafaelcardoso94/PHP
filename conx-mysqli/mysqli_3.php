<?php
$mysqli = new mysqli("host-server","nome-banco","password","user-banco");
  echo "Conexão Efetuada com sucesso!";
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
