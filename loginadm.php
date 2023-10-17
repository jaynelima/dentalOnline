<?php
//Lendo os dados do usuario;

$email = $_POST['email'];
$senha = $_POST['senha'];

//Conexão com o BD
include_once("conexao.php");

//Instrução para buscar o usuário na tabela
$stmt = "select * from tbadm where email = '$email';";

//Executando a consulta SQL
$resultado = mysqli_query($conn, $stmt);

//Pegando os dados do usuario
if (mysqli_num_rows($resultado) > 0) {
    $usuario = mysqli_fetch_assoc($resultado);

    //Verificando se o usuários está ativo
    if (password_verify($senha, $usuario['senha'])==FALSE) { //Verifica se as senhas não conferem
            $erro = "Senha incorreta";
        }
    } else {
    $erro = "Usuário não encontrado";
}

//Verificando se não houveram erros para autenticar o usuário
if (!$erro) {
    session_start();
    $_SESSION['administrador'] = $usuario['email'];
        header("location:telaadm.php");
}else{
    header("location:telaloginadm.php?erro=".$erro);
}











?>