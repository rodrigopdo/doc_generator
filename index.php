<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand mx-auto" href="#">
          <img src="assets/logo-light.png" width="110" class="d-inline-block align-center" alt="Agroforte">
        </a>        
      </div>
    </nav>
    <h4 class="text-center pt-5">Gerador de Documentos</h4>

  <div class="container col-md-4 mt-5">    
    <div class="card">
      <div class="card-header text-center bg-warning">
        <strong>LOGIN </strong> <i class="fas fa-lock"></i>
        <i class="bi bi-wrench"></i>
      </div>
      <div class="card-body">

        <form action="valida_login.php" method="POST" class="card-login">
          <div class="my-3">
            <label class="form-label">Usuário</label>
            <input name="user" type="text" class="form-control" aria-describedby="user" autofocus>
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
            <label class="form-label">Senha</label>
            <input name="password" type="password" class="form-control">
          </div>

          <?php
            if(isset($_GET['login']) && $_GET['login'] == 'erro') { 
          ?>

          <div class="text-danger">
            Usuário não cadastrado!
          </div>
          
          <?php }; ?>
        
          <div class="d-grid my-4">
            <button class="btn btn-success" type="submit">Enviar</button>
          </div>
        </form>
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