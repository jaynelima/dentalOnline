<?php
$stmt = "select * from tbservicos;";
$resultado = mysqli_query($conn,$stmt);
if(mysqli_num_rows($resultado)>0){
    while($linha=mysqli_fetch_assoc($resultado)){
        echo "<option value='".$linha['codservico']."'>".$linha['descricao']."</option>";
    }
}else{
    echo "<option value=''>Não há serviços cadastrados</option>";
}
?>