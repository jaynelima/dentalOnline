<?php
$stmt = "select * from tbpacientes;";
$resultado = mysqli_query($conn,$stmt);
if(mysqli_num_rows($resultado)>0){
    while($linha=mysqli_fetch_assoc($resultado)){
        echo "<option value='".$linha['email']."'>".$linha['nome']."</option>";
    }
}else{
    echo "<option value=''>Não há clientes cadastrados</option>";
}
?>