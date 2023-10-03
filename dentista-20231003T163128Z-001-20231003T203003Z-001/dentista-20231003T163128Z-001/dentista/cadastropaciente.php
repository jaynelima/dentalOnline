<?php
//Lendo os dados do formulário de cadastro
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = trim(password_hash($_POST['senha'], PASSWORD_DEFAULT)); //Armazenando a senha criptografada

//Conexão com o BD
include_once("conexao.php");

//instrução SQL para inserir o usuario na tabela (INSERT)
$stmt = "insert into tbpacientes values ('$email','$nome','$senha');";

//Executando a instrução SQL
if(mysqli_query($conn,$stmt)){
    header("location:telalogin.php");
}else{
    header("location:telacadastropaciente.php");
}

?>

