<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="login">
            <form method="post" action="loginadm.php">
                <h1>Tela de Login</h1>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" name="email" placeholder="Informe seu e-mail" type="email" required="required"
                        class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <div class="input-group">
                        <input id="senha" name="senha" type="password" required="required" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                               <i class="fa fa-eye-slash" id="olho"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>           
        </div>
        <!-- Script PHP para mostrar a mensagem de erro -->
        <?php
            if (isset($_GET['erro'])){
                echo "
                    <div class='msg' style='text-align:center; color:red; font-weight:bold;'>
                        <p>".$_GET['erro']."</p>
                    </div>
                ";
            }

            ?>
    </div>

    <script src="js/script.js"></script>
</body>

</html>