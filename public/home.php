
<?php
  session_start();
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: index.php?login=erro2');
  }
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script defer src="js/masks.js"></script>
    <script defer src="js/test-app.js"></script>
    <script defer src="js/cep.js"></script>

    <title>Gerador de Documentos</title>
  </head>
  <body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="assets/logo-light.png" width="100" class="d-inline-block align-top ms-5" alt="">
        </a>        
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav navbar-nav ms-auto me-5 mb-2 mb-lg-0">
            <li class="nav-item me-4">
              <a class="nav-link" href="consulta.php">Consulta <i class="fas fa-search"></i></a>
            </li>
            <li class="nav-item dropdown me-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Contratos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="pdf/contrato_cessao/contrato-cessao-PLUMA.html">Contrato de Cessão</a></li>
                <li><a class="dropdown-item" href="pdf/termo_cessao/termo-cessao-PLUMA.html">Termo de Cessão</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown me-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Notificações
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="pdf/contrato_cessao/contrato-cessao-PLUMA.html">Solicitação de Documentos</a></li>
                <li><a class="dropdown-item" href="pdf/termo_cessao/termo-cessao-PLUMA.html">Boas-vindas</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#modalLogoff">SAIR <i class="fas fa-sign-out-alt"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
<!-- FORM -->
<div class="container col-md-8 mt-2">    
  <div class="card">
    <div class="card-header text-start text-success fw-bold">
      <h6 class="m-0"><i class="fas fa-user-edit"></i> CADASTRO NOVO CLIENTE </H5> 
    </div>
    <div class="card-body">
      <form class="row g-3">
        <div class="col-md-8 form-floating">
          <input type="text" class="form-control" id="nomeCompleto" placeholder="Nome Completo" required autofocus maxlength="70" minlength="6">
          <label for="nomeCompleto" class="form-label">Nome Completo</label>
        </div>
        <div class="col-md-4 form-floating">
          <input type="text" class="form-control" id="cpf" placeholder="CPF" required data-js="cpf">
          <label for="cpf" class="form-label">CPF</label>
        </div>
        <div class="col-md-8 form-floating">
          <input type="email" class="form-control" id="email" placeholder="E-mail" required maxlength="50" minlength="6">
          <label for="email" class="form-label">Email</label>
        </div>
        <div class="col-md-4 form-floating">
          <input type="text" class="form-control" id="phone" placeholder="Telefone Celular" required data-js="celular">
          <label for="celular" class="form-label">Telefone Celular</label>
        </div>
        <div class="col-md-3 form-floating">
          <input type="text" class="form-control" id="cep" placeholder="CEP" required maxlength="9" data-textep">
          <label for="cep" class="form-label">CEP</label>
        </div>
        <div class="col-md-9 form-floating">
          <input type="text" class="form-control" id="logradouro" placeholder="Endereço" required maxlength="100">
          <label for="logradouro" class="form-label">Endereço</label>
        </div>
        <div class="col-md-2 form-floating">
          <input type="text" class="form-control" id="numero" placeholder="Número" required>
          <label for="numero" class="form-label">Número</label>
        </div>
        <div class="col-md-5 form-floating">
          <input type="text" class="form-control" id="complemento" placeholder="Complemento" maxlength="100">
          <label for="complemento" class=" form-label">Complemento</label>
        </div>
        <div class="col-md-5 form-floating">
          <input type="text" class="form-control" id="bairro" placeholder="Bairro" required minlength="3" maxlength="9">
          <label for="bairro" class="form-label">Bairro</label>
        </div>
        <div class="col-md-10 form-floating">
          <input type="text" class="form-control" id="localidade" placeholder="Cidade" required>
          <label for="localidade" class="form-label">Cidade</label>
        </div>
        <div class="col-md-2 form-floating">
          <input type="text" class="form-control" id="uf" placeholder="UF" required minlength="1" maxlength="2">
          <label for="uf" class="form-label">UF</label>
        </div>

        <div class="col-12 mt-4">
          <button type="button" data-bs-toggle="modal" data-bs-target="#modalSubmitData" onclick="registerUser()" class="btn btn-success col-12">Enviar</button>
        </div>
      </form>      
    </div>
  </div>
</div>

<!-- MODAL ENVIAR -->
<div class="modal fade" id="modalSubmitData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enviado!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL LOGOFF -->
<div class="modal fade" id="modalLogoff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Você realmente deseja sair? <i class="fas fa-sign-out-alt"></i></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a type="button" href="logoff.php" class="btn btn-success">Sair</a>
      </div>
    </div>
  </div>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>