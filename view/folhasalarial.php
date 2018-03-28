<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8"/>
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
    	</div>
  		</div>
	</div>
<div class="container-fluid" style="height:90px;">
  <div class="col-sm-12 bg-white">
  	<br />
    <h1 class="text-center"> Cupom salarial </h1>
  </div>
</div>
<div class="container"> 
  <table class="table">	
  <tbody>
  	<tr class="table-info">
		<td>CPF: </td>
		<td><?php echo $_SESSION['dados']['cpf']; ?> </td>
	</tr>
	<tr class="table-info">
		<td>Funcionário:</td>
		<td> <?php echo $_SESSION['dados']['nomefuncionario']; ?> </td>
	</tr>
	<tr class="table-info">
		<td>Idade:</td> 
		<td class="float-left"><?php echo $_SESSION['dados']['idade']; ?> anos </td>
	</tr>
	<tr class="table-info">
		<td>Salário base:</td>
		<td> R$ <?php echo $_SESSION['dados']['salario'];?> </td>
	</tr>
	<tr class="table-info">
		<td>Salário família: </td>
		<td> R$ <?php echo $_SESSION['dados']['salariofamilia']; ?></td>
	</tr>
	<tr class="table-info">
		<td>Abono:</td>
		<td> R$ <?php echo $_SESSION['dados']['abono']; ?></td>
	</tr>
	<tr class="table-info">
		<td>Salário bruto:</td> 
		<td>R$ <?php echo $_SESSION['dados']['salariobruto']; ?></td>
	</tr>
	<tr class="table-info">
		<td>INSS: </td>
		<td> R$ <?php echo $_SESSION['dados']['inss']; ?></td>
	</tr>
	<tr class="table-info">
		<td>Salário liquido: </td>
		<td> R$ <?php echo $_SESSION['dados']['salarioliquido']; ?></td>
	</tr>
 </table>
</div>
  <a href="sispag-versao1/view/formulario.php"> Voltar </a>
</body>
</html>