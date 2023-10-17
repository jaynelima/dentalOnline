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
              
                
                <li><a href="telacadastroservicos.php">SERVIÇOS</a></li>
                
                <li><a href="telacadastrohorarios.php">HORARIOS</a></li>
                
                <li><a href="telaagendamento.php">AGENDA</a></li>

                <li><a href="index.html">SAIR</a></li>
            </ul>
        </nav>
    <div class="container">
        <div>
        
        </div>
        <div style="background-color:#FFF; padding-bottom:30px; ">
        <h3 class="text-center" style="padding-top:40px;">Cadastro de clientes</h3>
        
        <form method="get" action="cadastroclientes.php" style="padding-left:50px; padding-right:50px;">
            <div class="form-group">
                <label for="email">email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-id-card-o"></i>
                        </div>
                    </div>
                    <input id="email" name="email" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <input id="nome" name="nome" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-mobile-phone"></i>
                        </div>
                    </div>
                    <input id="celular" name="celular" type="text" required="required" class="form-control">
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
                    <th scope="col">EMAIL</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Celular</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include_once("conexao.php");
                $stmt="select * from tbpacientes;";
                $resultado = mysqli_query($conn,$stmt);
                if(mysqli_num_rows($resultado)>0){
                    while($linha=mysqli_fetch_assoc($resultado)){
                        echo "
                            <tr>
                                <th scope='row'>".$linha['email']."</th>
                                <td>".$linha['nome']."</td>
                                <td>".$linha['senha']."</td>
                            </tr>
                             ";
                    }
                }else{
                    echo "
                    <tr>
                        <td colspan='3'>Nenhum usuário cadastrado</td>
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