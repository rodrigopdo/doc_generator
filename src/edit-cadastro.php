
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
    <script defer src="js/app.js"></script>
    <script defer src="js/cep.js"></script>

    <title>Edição de Cadastro</title>
  </head>
<body class="bg-light">

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
            <a class="nav-link" href="edit-cadastro.php">Alterações</a>
          </li>
          <li class="nav-item me-4">
          <a class="nav-link" href="kyc.php">KYC</a>
          </li>
          <li class="nav-item dropdown me-4">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contratos</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="pdf/Pluma/contrato_cessao/contrato-cessao.html">Contrato de Cessão PLUMA</a></li>
              <li><a class="dropdown-item" href="pdf/Pluma/contrato_cessao/contrato-cessao-com-sacado.html">Contrato de Cessão(com sacado) PLUMA</a></li>
              <li><a class="dropdown-item" href="pdf/Pluma/termo_cessao/termo-cessao-PLUMA.html">Termo de Cessão PLUMA</a></li>
              <li><a class="dropdown-item" href="pdf/Pluma/aditamento_PLUMA/aditamento-PLUMA.html">Aditamento PLUMA</a></li>
              <li><a class="dropdown-item" href="pdf/Plusval/contrato_cessao/contrato-cessao-com-sacado.html">Contrato de Cessão PLUSVAL (com sacado)</a></li>
              <li><a class="dropdown-item" href="pdf/Plusval/contrato_cessao/contrato-cessao.html">Contrato de Cessão PLUSVAL</a></li> 
              <li><a class="dropdown-item" href="pdf/Plusval/termo_cessao/termo-cessao.HTML">Termo de Cessão PLUSVAL</a></li>
              <li><a class="dropdown-item" href="pdf/Vigor/contrato_cessao/contrato-cessao.html">Contrato de Cessão VIGOR</a></li>
              <li><a class="dropdown-item" href="pdf/Vigor/termo_cessao/termo-cessao-vigor.html">Termo de Cessão VIGOR</a></li>
              <li><a class="dropdown-item" href="pdf/Avenorte/contrato_cessao/contrato-cessao.html">Contrato de Cessão AVENORTE</a></li>
              <li><a class="dropdown-item" href="pdf/Avenorte/contrato_cessao/contrato-cessao-com-sacado.html">Contrato de Cessão(com sacado) AVENORTE</a></li>
              <li><a class="dropdown-item" href="pdf/Avenorte/termo_cessao/termo-cessao.html">Termo de Cessão AVENORTE</a></li>
              <li><a class="dropdown-item" href="pdf/Coopeavi/contrato_cessao/contrato-cessao.html">Contrato de Cessão COOPEAVI</a></li>
              <li><a class="dropdown-item" href="pdf/Coopeavi/termo_cessao/termo-cessao.html">Termo de Cessão COOPEAVI</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown me-4">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Notificações</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="pdf/notifications/solicitacao_documento/solicitacao-documento.html">Solicitação de Documentos</a></li>
              <li><a class="dropdown-item" href="pdf/notifications/boas_vindas_adequacao/boas-vindas.html">Boas-vindas Adequação</a></li>
              <li><a class="dropdown-item" href="pdf/notifications/boas_vindas_custeio/boas-vindas.html">Boas-vindas Custeio</a></li>
              <li><a class="dropdown-item" href="pdf/notifications/pendencia_assinatura/pendencia-assinatura.html">Pendência de Assinatura</a></li>
              <li><a class="dropdown-item" href="pdf/notifications/reprovacao/reprovacao.html">Reprovação</a></li>
            </ul>
          <li class="nav-item dropdown me-4">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Páginas Externas</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="https://www.ilovepdf.com/pdf_to_jpg">Conversor PDF para Imagem</a></li>
              <li><a class="dropdown-item" href="https://meuagroforte.sharepoint.com/sites/AgroforteBackoffice">Sharepoint Intranet</a></li>
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
    <div class="row justify-content-between align-items-center p-1">
      <div class="col-md-5">
        <h6 class="mt-4 ps-3 text-success"><i class="fas fa-user-edit"></i> ALTERAÇÃO DE DADOS CADASTRAIS</h6>
      </div>
      <div class="col-md-3 me-3">
        <div class="input-group">
          <input id="inputSearchId" type="text" class="form-control mt-3 px-3 text-success" autofocus placeholder="ID Cliente" required maxlength="2" minlength="2">
          <button class="btn btn-outline-warning mt-3 mr-3 px-3 text-success" type="button" id="searchIdBtn"><i class="fas fa-search" onclick="fillSearchForm()"></i></button>
        </div>    
      </div>
    </div>
    <div class="card-body">
      <form class="row g-1">
        <div class="col-md-8 form-floating">
          <input type="text" class="form-control" id="nomeCompleto" placeholder="Nome Completo" required maxlength="70" minlength="6">
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
          <input type="text" class="form-control" id="bairro" placeholder="Bairro" required minlength="3" maxlength="50">
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
        <div class="col-md-12 form-floating">
          <input type="text" class="form-control" id="loan" placeholder="Dados Cotação" required>
          <label for="loan" class="form-label">Dados Cotação (JSON)</label>
        </div>

        <div class="col-12 mt-3 mx-auto p-0 row justify-content-end">
          <button type="button" onclick="cleanSearching()" class="btn btn-warning col-3 me-4">Cancelar</button>
          <button type="button" data-bs-toggle="modal" data-bs-target="#modalSubmitChanges" class="btn btn-success col-3">Salvar alterações</button>
        </div>
      </form>      
    </div>
  </div>
</div>

<!-- MODAL SALVAR MUDANÇAS -->
<div class="modal fade" id="modalSubmitChanges" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Você deseja salvar as alterações?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" onclick="registerUserChanges()">Sim</button>
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

<script>

function fillSearchForm(){
  let customerSearchId = document.getElementById("inputSearchId").value;
  
  document.getElementById("nomeCompleto").value= JSON.parse(localStorage[customerSearchId]).name;
  document.getElementById("cpf").value = JSON.parse(localStorage[customerSearchId]).cpf;
  document.getElementById("email").value = JSON.parse(localStorage[customerSearchId]).email;
  document.getElementById("phone").value = JSON.parse(localStorage[customerSearchId]).phone;
  document.getElementById("cep").value = JSON.parse(localStorage[customerSearchId]).cep;
  document.getElementById("logradouro").value = JSON.parse(localStorage[customerSearchId]).address;
  document.getElementById("numero").value = JSON.parse(localStorage[customerSearchId]).number;
  document.getElementById("complemento").value = JSON.parse(localStorage[customerSearchId]).addOnAddress;
  document.getElementById("bairro").value = JSON.parse(localStorage[customerSearchId]).district;
  document.getElementById("localidade").value = JSON.parse(localStorage[customerSearchId]).city;
  document.getElementById("uf").value = JSON.parse(localStorage[customerSearchId]).uf;
  document.getElementById("loan").value = JSON.parse(localStorage[customerSearchId]).loan;  
}

function cleanSearching() {
	document.getElementById("nomeCompleto").value = "";
	document.getElementById("cpf").value = "";
	document.getElementById("email").value = "";
	document.getElementById("phone").value = "";
	document.getElementById("logradouro").value = "";
	document.getElementById("numero").value = "";
	document.getElementById("complemento").value = "";
	document.getElementById("bairro").value = "";
	document.getElementById("localidade").value = "";
	document.getElementById("uf").value = "";
	document.getElementById("cep").value = "";
	document.getElementById("loan").value = "";

  window.location.reload();
}

</script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>