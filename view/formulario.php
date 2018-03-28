<!DOCTYPE html>
<html lang="pt-br">
<?php
require_once ('../session/startSession.php');
?>
<head>
  <title>SisPag</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>           
  <div class="container-fluid">    
    <div class="row">
      <div class="col-sm-4 bg-dark text-white">
      </div>
      <div class="col-sm-4 bg-dark text-white">
        <h1 class="text-center">SisPag</h1>
        <br />
        <h3 class="text-center">Calculo salarial</h3> 
      </div>
      <div class="col-sm-4 bg-dark text-white">
        <a class="float-right" href="../session/destroySession.php"> Sair </a>
      </div>
      <div class="col-sm-4 bg-dark text-white">

      </div>
    </div>
  </div>
  <div class="container-fluid" style="height:90px;">
    <div class="col-sm-12 bg-white">
      <h1></h1>
    </div>
  </div>
  <div class="container"> 
    <table class="table">
      <form name="Folha de pagamento" method="POST" action="../controller/FormularioFuncionarioController.php">
        <tbody>
          <tr class="table-info">
            <td>CPF</td>
            <td><input type="cpf" name="_cpf" size="30" maxlength="11" placeholder="Somente Numeros"></td>
          </tr>
          <tr class="table-info">
            <td>Funcionario</td>
            <td><input type="text" name="_funcionario" size="30" placeholder="Nome Completo"></td>
          </tr>
          <tr class="table-info">
            <td>Ano de Nascimento</td>
            <td><input type="number" name="_anonascimento" min="1918" max="2017"></td>
          </tr>
          <tr class="table-info">
            <td>Salario base</td>
            <td><input type="text" name="_salariobase" size="30" placeholder="R$"></td>
          </tr>
          <tr class="table-info">
            <td>Quantidade de Filhos</td>
            <td><input type="number" name="_qntfilhos" min="0" max="30" ></td>
          </tr>
          <tr class="table-info">
            <td><input type="submit" class="btn btn-outline-dark" value="Calcular"></td>
            <td> </td>
          </tr>
        </tbody>
      </form>
    </table>
  </div>

</body>
</html> 