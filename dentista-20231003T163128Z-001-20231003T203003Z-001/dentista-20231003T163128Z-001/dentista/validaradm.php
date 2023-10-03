<?php

session_start();
if(!isset($_SESSION['administrador'])){
    $erro = "Usuário não autenticado.";
}

if(isset($erro)){
    header("location:telacadastroadm.php?erro=".$erro);
}

?>