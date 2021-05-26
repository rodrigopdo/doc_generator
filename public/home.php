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

    <style type="text/css">
      body {
        background-color: #f3f3f3;
        box-sizing: border-box;      
      }
      .container {
        max-width: 1100px;
        display: flex;
        flex-flow: row wrap;
        justify-content: center;
        margin: 70px auto;
      }
      .item {
        width: 200px;
        background-color: #fff;
        color: #333333;
        box-shadow: 0 0.375em 1.6rem 0 rgba(0,0,0,.1);
        margin: 10px;
        padding: 20px 5px;
        text-align: center;
        border-radius: 10px;
        transition: 0.3s ease-in;
        text-decoration: none;
      }
      .item:hover {
        transform: scale(1.03);
      }
      .item h1 {
        margin: 10px auto -20;
      }
      .header {
        background-color: #D8D8D8;
        display: flex;
        margin: 0 auto;
        padding: 7px 30px;
        justify-content: space-between;
        align-items: center;
      }
      .header p {
        margin: 0;
        color: #6E6E6E;
      }
    </style>

<title>Home</title>
  </head>
<body>

  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
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
              <a class="nav-link" href="cadastro.php">Cadastro</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="consulta.php">Consulta</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="edit-cadastro.php">Alteração Cadastral</a>
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

    <div class="header">
      <p><?php echo ""?></p>
      <p><script> document.write(new Date().toLocaleDateString()); </script></p>
    </div>

  <div class="container">
      <a class="item" href="cadastro.php"><h1 style="color: #088A29;"><i class="fas fa-user-edit"></i></h1><br>Cadastro<br>de Cliente</a>

      <a class="item" href="consulta.php"><h1 style="color: #088A29;"><i class="fas fa-search"></i></h1><br>Consulta<br>de Cliente</a>

      <a class="item" href="pdf/contrato_cessao/contrato-cessao-PLUMA.html"><h1 style="color: #3104B4;"><i class="fas fa-file-signature"></i></h1><br>Contrato<br>de Cessão</a>

      <a class="item" href="pdf/termo_cessao/termo-cessao-PLUMA.html"><h1 style="color: #3104B4;"><i class="fas fa-file-signature"></i></h1><br>Termo<br>de Cessão</a>

      <a class="item" href="pdf/solicitacao_documento/solicitacao-documento.html""><h1 style="color: #FACC2E"><i class="fas fa-file-upload"></i></h1><br>Solicitação de<br>Documentos</a>

      <a class="item" href="pdf/boas_vindas/boas-vindas.html""><h1 style="color: #FACC2E"><i class="fas fa-handshake"></i></h1><br>Notificação de<br>Boas-Vindas</a>

      <a class="item"type="button" data-bs-toggle="modal" data-bs-target="#modalClearLocalstorage"><h1 style="color: #FE2E64;"><i class="fas fa-trash-alt"></i></h1><br>Limpar<br>LocalStorage</a>

      <a class="item" type="button" data-bs-toggle="modal" data-bs-target="#modalLogoff"><h1 style="color: #FE2E64;"><i class="fas fa-sign-out-alt"></i></h1><br>Sair do<br>Sistema</a>
  </div>

  <!--MODAL CLEAR LOCALSTORAGE-->
<div class="modal fade" id="modalClearLocalstorage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Você realmente deseja excluir todos os cadastros de Localstorage?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a type="button" onclick="localStorage.clear()" class="btn btn-danger" data-bs-dismiss="modal">Excluir tudo</a>
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
        <a type="button" href="logoff.php" class="btn btn-danger">Sair</a>
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