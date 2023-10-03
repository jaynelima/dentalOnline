<?php
//Lendo os dados do formulário de cadastro
$email = $_POST['email'];
$senha = trim(password_hash($_POST['senha'], PASSWORD_DEFAULT)); //Armazenando a senha criptografada

//Conexão com o BD
include_once("conexao.php");

//instrução SQL para inserir o usuario na tabela (INSERT)
$stmt = "insert into tbadm values ('$email','$senha');";

//Executando a instrução SQL
if(mysqli_query($conn,$stmt)){
    header("location:telaloginadm.php");
}else{
    header("location:telaadm.php");
}

?>

