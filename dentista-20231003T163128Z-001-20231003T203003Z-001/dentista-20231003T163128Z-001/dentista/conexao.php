<?php
// Parâmetros da conexão
$servidor = "localhost";
$u = "root";
$s = "";
$bd = "bddentista";

// Cria a conexão
$conn = mysqli_connect($servidor, $u, $s, $bd);

// Checa a conexão
if (!$conn) {
  die("Falha de conexão: " . mysqli_connect_error());
}
?>


