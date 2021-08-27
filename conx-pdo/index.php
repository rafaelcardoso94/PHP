<?php
  try {
    $hostname = "host-server";
    $port = 1433;
    $dbname = "nome-banco";
    $username = "user-banco";
    $pw = "password";
    $dbh = new PDO ("dblib:host=$hostname:$port;dbname=$dbname","$username","$pw");
    echo "Conexão ok";
  } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
}
?>
