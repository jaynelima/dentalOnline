<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
  <title>Agendamento de horários</title>
</head>
<body>
  <div class="container">
    <?php
      //include_once("navbar.html");
      include_once("conexao.php");
      include_once("validarpaciente.php");
      if(!isset($_COOKIE['data'])){
        setcookie("data",date('Y-m-d'));
      }
    ?>
    <form method="get" action="agendamento.php">
      <input type="hidden" name="paciente" value="<?php
      //session_start();
      echo $_SESSION['paciente'];

      ?>">
      <h3 class="text-center" style="padding-top:40px;">Agendamento de Horários</h3>
      <div class="form-group">
        <label for="data">Data</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-calendar"></i>
            </div>
          </div>
          <input id="data" name="data" type="date" required="required" class="form-control"
            value="<?php echo $_COOKIE['data']; ?>">
        </div>
      </div>
      <div class="form-group">
        <label>Horários para
          <?php echo $_COOKIE['data']; ?>
        </label>
        <div>
          <?php
          include_once("listarhorarios.php");
          ?>
        </div>
      </div>

     
      <div class="form-group">
        <label for="servico">Serviço</label>
        <div>
          <select id="servico" name="servico" required="required" class="custom-select">
            <?php
            include_once("listarservicos.php");
            ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <button name="submit" type="submit" class="btn btn-outline-info">Agendar Horário</button>
      </div>
      <div class="form-group">
      <a href="logout.php"><button name="sair" type="button" class="btn btn-danger">Sair</button></a>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>
<?php
mysqli_close($conn);
?> 