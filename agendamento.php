<?php

$data = $_GET['data'];
$horario = $_GET['horario'];
$paciente = $_GET['paciente'];
$servico = $_GET['servico'];

include_once("conexao.php");
$stmt = "insert into tbagendas values ('$data',$horario,'$paciente',$servico);";
if(mysqli_query($conn,$stmt)){
header("location:confirma.php");
}else{
    echo "Erro ao agendar horário".mysqli_error($conn);
}
mysqli_close($conn);

?>