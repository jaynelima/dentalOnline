<?php

session_start();
if(!isset($_SESSION['paciente'])){
    $erro = "Usuário não autenticado.";
}

if(isset($erro)){
    header("location:telalogin.php?erro=".$erro);
}

?>