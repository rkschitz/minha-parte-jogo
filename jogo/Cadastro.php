<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" type="text/CSS" href="estilos.CSS">
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="utf-8">
  <style>
    body {
      background-image: url(imagens/nuvens.png);
      background-repeat: no-repeat;
      background-size: 100%;
    }

    #cadastro {
      width: 25%;
      height: 387pt;
      color: white;
      background-color: #11111199;
      padding: 12px;
      border: 4px;
      border-radius: 5px;
    }

    #check {
      color: white;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-none">
    <a class="navbar-brand" href="#">
      <h2>Celestial</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="">Download</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="história.html" tabindex="-1" aria-disabled="true">História</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Creditos.html" tabindex="-1" aria-disabled="true">Créditos</a>
        </li>
        
      </ul>
    </div>
  </nav>
  <br>
  <br>
    <br>
    <div id="cadastro" class="mx-auto">
      <div class="container mx-auto pt-10 px-10">
        <div class="text-lg text-center font-bold mb-4">
          
        
        <form action="" method="POST">



            <div class="form-group">
              <label form="nome">
                <h4>Nome Completo</h4>
              </label>
              <input type="text" name="nome" class="form-control" id="nome-id" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">
                <h4>Endereço de email</h4>
              </label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">
                <h4>Senha</h4>
              </label>
              <input type="password" name="senha" class="form-control" id="password" name="senha" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">
                <h4>Confirme a Senha</h4>
              </label>
              <input type="password" class="form-control" id="confirm_password" name="confirmarsenha" required>
            </div>
            <div id="check" class="form-check">
              <input class="form-check-input" type="checkbox" name="cbkativo"id="notificações">
              <label for="embalagem">
                <h4>enviar-me notificações</h4>
              </label>
            </div>
            <a href="login.php"><button type="button" class="btn btn-danger btn-lg">Cancelar</button></a>
            <button type="submit" name="acao" value="Cadastrar" class="btn btn-success btn-lg" >Enviar</button>
          </form>
        </div>
      </div>
    </div>
    <br>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Senhas diferentes!");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
  </body>

</html>
<?php

$pdo = new PDO("mysql:host=localhost;dbname=celestial","root","");

if (isset($_POST["acao"])) {
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    if (isset($_POST["cbkativo"])) {
        $ativo = true;
    } else {
        $ativo = false;
    }
    $sql = $pdo ->prepare("INSERT INTO usuarios (codigo, nome, email, senha) 
                            values (null,?,?,?)");
                            $sql->execute(array($nome,$email,$senha));
                             ?>
                             <script>
                            document.location = "paglogado.php";
                            </script>
<?php
}
?>