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

      @media print{
        .no-print{
          display:none;
        }
      }
      @page {
        margin: 0.1in;
        size: landscape; 
      }
      body {
        background-color: #f3f3f3;
        box-sizing: border-box;      
      }
      input {
        width: 30px;
        margin: 0;
      }
      label {
        margin: 0 20px 0 0;
        font-size: 16px;
      }
      button {
        background-color: transparent;
        margin: 0 0 0 10px;
        border: none;
        font-size: 20px
      }
      .btnContainer {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .printBtn {
        background-color: #397437;
        width: 300px;
        color: #fff;
        font-size: 14px;
        text-align: center;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        padding: 10px 50px;
        margin: 30px auto;
      }
      .backBtn {
        text-align: center;
        margin: 0 auto 50px;
        text-decoration: none;
        color: black;
      }
      .container {
        max-width: 1500px;
        display: flex;
        flex-flow: row wrap;
        justify-content: center;
        margin: 40px auto;
      }
      .item {
        width: 170px;
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
        background-color: #D8F6CE;
        display: flex;
        margin: 0 auto;
        padding: 7px 30px;
        justify-content: center;
        align-items: center;
      }
      .header p {
        margin: 0;
        color: #6E6E6E;
      }
    </style>

<script defer src="js/app.js"></script>

<title>KYC</title>
</head>
<body onload="showCustomerData()">

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
              <li><a class="dropdown-item" href="pdf/Vigor/termo_cessao/termo-cessao.html">Termo de Cessão VIGOR</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown me-4">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Notificações</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="pdf/notifications/solicitacao_documento/solicitacao-documento.html">Solicitação de Documentos</a></li>
              <li><a class="dropdown-item" href="pdf/notifications/boas_vindas/boas-vindas.html">Boas-vindas</a></li>
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

  <div class="header">
    <h2>KYC</h2>
  </div>

  <div class="no-print container">
      <a class="no-print item" href="https://portalservicos.denatran.serpro.gov.br/#/" target="_blank"><h1 style="color: #e67e22;"><i class="fas fa-car"></i></h1><br>Consulta<br>de CNH</a>

      <a class="no-print item" href="https://servicos.dpf.gov.br/antecedentes-criminais/certidao" target="_blank"><h1 style="color: #088A29;"><i class="far fa-address-card"></i></h1><br>Antecedentes<br>Criminais BR</a>

      <a class="no-print item" href="http://www.ssp.sp.gov.br/servicos/atestado.aspx" target="_blank"><h1 style="color: #3104B4;"><i class="far fa-address-card"></i></h1><br>Antecedentes<br>Criminais SP</a>

      <a class="no-print item" href="https://site.cenprotnacional.org.br/" target="_blank"><h1 style="color: #e74c3c;"><i class="fas fa-stamp"></i></h1><br>Protestos<br>em Cartório</a>

      <a class="no-print item" href="https://sanctionssearch.ofac.treas.gov/" target="_blank"><h1 style="color: #FACC2E"><i class="fas fa-passport"></i></h1><br>Consulta de<br>Sanções</a>
  </div>

  <div class="container-xxl overflow-auto">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome do Cliente</th>
        <th scope="col">RG ou CNH Válido?</th>
        <th scope="col">Sem Antecedente Criminal?</th>
        <th scope="col">Sem Protestos em Cartório?</th>
        <th scope="col">Aprovado?</th>
      </tr>
    </thead>
    <tbody style="font-size: 13px;" id="customerList" ></tbody>
  </table>
</div >

<div class="noprint btnContainer">
  <a class="no-print printBtn" type="button" onclick="window.print()">Imprimir ou Salvar PDF</a>
  <a class="no-print backBtn" href="../../home.php">Retornar <i class="fas fa-sign-out-alt"></i></a>
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

<script>

function showCustomerData() {
	let customers = []
	customers = dataBase.getCustomerList()

	let listCustomer = document.getElementById('customerList')
	listCustomer.innerHTML = ''

	customers.forEach(function(d) {

    //RG VALIDATION
    let checkRgYes = document.createElement('input')
		checkRgYes.setAttribute("type", "checkbox")
    // checkRgYes.id = "rgId"
    let checkRgNo = document.createElement('input')
		checkRgNo.setAttribute("type", "checkbox")

    let labelRgYes = document.createElement('label')
    labelRgYes.innerHTML = "Sim"
    labelRgYes.style.color = '#088A29'

    let labelRgNo = document.createElement('label')
    labelRgNo.innerHTML = "Não"
    labelRgNo.style.color = 'red'

    //CRIMINAL RECORD VALIDATION
    let checkCriminalYes = document.createElement('input')
		checkCriminalYes.setAttribute("type", "checkbox")
    // checkCriminalYes.id = "criminalId"
    let checkCriminalNo = document.createElement('input')
		checkCriminalNo.setAttribute("type", "checkbox")

    let labelCriminalYes = document.createElement('label')
    labelCriminalYes.innerHTML = "Sim"
    labelCriminalYes.style.color = '#088A29'

    let labelCrimNo = document.createElement('label')
    labelCrimNo.innerHTML = "Não"
    labelCrimNo.style.color = 'red'

    //NOTARY PROTEST VALIDATION
    let checkProtestYes = document.createElement('input')
		checkProtestYes.setAttribute("type", "checkbox")
    // checkProtestYes.id = "protestId"
    let checkProtestNo = document.createElement('input')
		checkProtestNo.setAttribute("type", "checkbox")

    let labelProtestYes = document.createElement('label')
    labelProtestYes.innerHTML = "Sim"
    labelProtestYes.style.color = '#088A29'

    let labelProtestNo = document.createElement('label')
    labelProtestNo.innerHTML = "Não"
    labelProtestNo.style.color = 'red'

		let row = listCustomer.insertRow()
		row.insertCell(0).innerHTML = d.id
		row.insertCell(1).innerHTML = d.name
		row.insertCell(2).append(checkRgYes, labelRgYes, checkRgNo, labelRgNo)
		row.insertCell(3).append(checkCriminalYes, labelCriminalYes, checkCriminalNo, labelCrimNo)
		row.insertCell(4).append(checkProtestYes, labelProtestYes, checkProtestNo, labelProtestNo)

    let validationYes = document.createElement('button')
    validationYes.addEventListener("click", function() {
        validationYes.style.color = '#3DD969'
        validationNo.style.color = '#D8D8D8'
    })
    validationYes.addEventListener("dblclick", function() {
        validationYes.style.color = '#D8D8D8'
        validationNo.style.color = '#D8D8D8'
    })
    validationYes.innerHTML = '<i class="far fa-thumbs-up"></i>'
    validationYes.style.color = '#D8D8D8'
    validationYes.style.display = 'inline'
    
    let validationNo = document.createElement('button')
    validationNo.addEventListener("click", function() {
        validationNo.style.color = 'red'
        validationYes.style.color = '#D8D8D8'
    })
    validationNo.addEventListener("dblclick", function() {
        validationYes.style.color = '#D8D8D8'
        validationNo.style.color = '#D8D8D8'
    })
    validationNo.innerHTML = '<i class="far fa-thumbs-down"></i>'
    validationNo.style.color = '#D8D8D8'
    validationNo.style.display = 'inline'
   
    
    row.insertCell(5).append(validationYes, validationNo)
    
		let btn = document.createElement('button')
		btn.className = 'btn btn-danger no-print'
		btn.innerHTML = '<i class="fas fa-times"></i>'
		btn.id = `id_despesa_${d.id}`
		btn.onclick = function() {
			let id = this.id.replace('id_despesa_', '')
			dataBase.delete(id)
			window.location.reload()
		}
		row.insertCell(6).append(btn)
	})
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