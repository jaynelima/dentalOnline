<?php

$email = $_GET['email'];
$nome = $_GET['nome'];
$celular = $_GET['celular'];

include_once("conexao.php");

$stmt = "insert into tbpacientes values ('$email', '$nome', '$celular');";

if(mysqli_query($conn,$stmt)){
    header("location:telacadastroclientes.php");
}else{
    echo "<p>Erro ao cadastrar cliente</p>";
}

mysqli_close($conn);

?>