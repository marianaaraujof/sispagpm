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
      <h1 class="text-center"> Login </h1>
     </div>
   </div>
   <div class="container">
     <table class="table">
     <tbody>
     <form action="../controller/LoginFormularioController.php" method= "POST">
     <!--<caption class="titulo fonte"> <b>Login</b> </caption> -->
     <tr class="table-info">
        <div class="container">
        <td><b>Usuario</b></td>
        <td><input type="text" placeholder="nome/usuario" name="_usuario" required></td>
    </tr>    
    <tr class="table-info">
        <div class="container">
        <td><b>Senha</b></td>
        <td><input type="password" name="_senha" required></td>
    </tr>  
    <tr class="table-info"> 
        <td colspan="2"><input type="submit" value="entrar"> </td>
    </tr>
    <tr class="table-info">
        <td colspan="2"><a href='http://www.google.com.br'>Esqueceu a senha?</a> </td>
    </tr>
     </table>
  </div>
 </body>
</html>