<!doctype html>

<?php
  session_start();
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: index.php?login=erro2');
  }
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- <script src="js/masks.js"></script> -->
    <script defer src="js/app.js"></script>

    <title>Consulta de Clientes</title>
  </head>
  <body class="bg-light" onload="showCustomerList()">

  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
          <img src="assets/logo-light.png" width="100" class="d-inline-block align-top ms-5" alt="">
        </a>        
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav navbar-nav ms-auto me-5 mb-2 mb-lg-0">
            <li class="nav-item me-4">
              <a class="nav-link" href="cadastro.php">Cadastro</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="consulta.php">Consulta</a>
            </li>
            <li class="nav-item me-4">
            <a class="nav-link" href="kyc.php">KYC</a>
            </li>
            <li class="nav-item dropdown me-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Contratos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="pdf/contrato_cessao/contrato-cessao-PLUMA.html">Contrato de Cessão</a></li>
                <li><a class="dropdown-item" href="pdf/contrato_cessao_antigo/contrato-cessao-antigo-PLUMA.html">Contrato de Cessão(antigo)</a></li>
                <li><a class="dropdown-item" href="pdf/termo_cessao/termo-cessao-PLUMA.html">Termo de Cessão</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown me-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Notificações
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="pdf/solicitacao_documento/solicitacao-documento.html">Solicitação de Documentos</a></li>
                <li><a class="dropdown-item" href="pdf/boas_vindas/boas-vindas.html">Boas-vindas</a></li>
                <li><a class="dropdown-item" href="pdf/pendencia_assinatura/pendencia-assinatura.html">Pendência de Assinatura</a></li>
                <li><a class="dropdown-item" href="pdf/reprovacao/reprovacao.html">Reprovação</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#modalLogoff">SAIR <i class="fas fa-sign-out-alt"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
<div class="container-xxl overflow-auto">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome do Cliente</th>
        <th scope="col">CPF</th>
        <th scope="col">E-mail</th>
        <th scope="col">Celular</th>
        <th scope="col">CEP</th>
        <th scope="col">Endereço</th>
        <th scope="col">Número</th>
        <th scope="col">Bairro</th>
        <th scope="col">Cidade</th>
        <th scope="col">UF</th>
      </tr>
    </thead>
    <tbody style="font-size: 13px;" id="customerList" ></tbody>
  </table>
</div >

<div class="container-xxl d-flex justify-content-end pb-5 pt-4">
  <a id="whatsBtn" onclick="customerMsg()" class="btn btn-success mx-1" target="_blank">Enviar mensagem <i class="fab fa-whatsapp"></i></a>
  <a href="https://outlook.office.com/mail/inbox" target="_blank" class="btn btn-info mx-1">Enviar E-mail <i class="far fa-envelope"></i></a>
  <a href="pdf/solicitacao_documento/solicitacao-documento.html" class="btn btn-warning mx-1">Solic. Documentos <i class="far fa-file-pdf"></i></a>
  <a href="pdf/contrato_cessao/contrato-cessao-PLUMA.html" class="btn btn-primary mx-1">Contrato Cessão <i class="far fa-file-pdf"></i></a>
  <a href="pdf/termo_cessao/termo-cessao-PLUMA.html" class="btn btn-primary mx-1">Termo Cessão <i class="far fa-file-pdf"></i></a>
  <a href="pdf/boas_vindas/boas-vindas.html" class="btn btn-success mx-1">Boas-vindas <i class="far fa-file-pdf"></i></a>
  <a href="pdf/reprovacao/reprovacao.html" class="btn btn-secondary mx-1">Reprovação <i class="far fa-file-pdf"></i></a>
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