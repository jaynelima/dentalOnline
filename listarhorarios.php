<?php
//Verifica se existe o cookie data
if (isset($_COOKIE['data'])) {
    $stmt = "select * from tbhorarios where numero not in 
    (select numero_horario from tbagendas where data = '" . $_COOKIE['data'] . "');";
} else {
    $stmt = "select * from tbhorarios;";
}
//Executa o comando SQL acima
$resultado = mysqli_query($conn, $stmt);
if (mysqli_num_rows($resultado) > 0) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "
        <input type='radio' required='required' class='btn-check' name='horario' id='horario" . $linha['numero'] . "'
         value='" . $linha['numero'] . "'>
        <label class='btn btn-outline-info'' for='horario" . $linha['numero'] . "'>" 
        . $linha['descricao'] . "</label>
        ";
    }
} else {
    echo "<p class='text-center btn-danger''>Não há horários Livres nesse dia</p>";
}
?>