<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="./estilo.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastro de Clientes</title>
</head>

<body style="background-color:#DCDCDC ;">
<nav id="menu-h">
            <ul>
                <li><a href="telacadastroclientes.php">CLIENTES</a></li>
                
                <li><a href="telacadastroservicos.php">SERVIÇOS</a></li>
                
                <li><a href="telaagendamento.php">AGENDA</a></li>

                <li><a href="index.html">SAIR</a></li>
            </ul>
        </nav>
    <div class="container">
        <div>
        
        </div>
        <div style="background-color:#FFF; padding-bottom:30px; ">
        <h3 class="text-center" style="padding-top:40px;">Cadastro de Horários</h3>
        
        <form method="get" action="cadastrohorarios.php" style="padding-left:50px; padding-right:50px;">
           
            <div class="form-group">
                <label for="nome">Descrição</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-align-justify"></i>
                        </div>
                    </div>
                    <input id="descricao" name="descricao" type="text" required="required" class="form-control">
                </div>
            </div>
           
            <div class="form-group text-center">
                <button name="submit" type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
        </div>
        <div style="background-color:#FFF; padding-left:50px;padding-right:50px;padding-bottom:30px; ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include_once("conexao.php");
                $stmt="select * from tbhorarios;";
                $resultado = mysqli_query($conn,$stmt);
                if(mysqli_num_rows($resultado)>0){
                    while($linha=mysqli_fetch_assoc($resultado)){
                        echo "
                            <tr>
                                <th scope='row'>".$linha['numero']."</th>
                                <td>".$linha['descricao']."</td>
                            </tr>
                             ";
                    }
                }else{
                    echo "
                    <tr>
                        <td colspan='3'>Nenhum horário cadastrado</td>
                    </tr>
                    ";
                }
                    
                ?>
            </tbody>
        </table>
            </div>    


                

    </div>
</body>

</html>