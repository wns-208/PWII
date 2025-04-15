<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
      <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">Login</h3>
        <form action="1_session_starts.php"method="POST">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="seuemail@exemplo.com">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password"  class="form-control" id="password" placeholder="Digite sua senha">
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Entrar</button>
          </div>
        </form>
        <p class="mt-3 text-center text-muted" style="font-size: 0.9em;">
          Ainda não tem uma conta? <a href="#">Cadastre-se</a>
        </p>
      </div>
    </div>
  <?php
  
  $email = isset($_POST['email']) ? $_POST['email'] : exit() ;
  $password = isset($_POST['password']) ? $_POST['password'] : exit() ;
  echo $email;
if($email == 'admin@hotmail.com' && $password == 'naopalmeiraworld'){
  $_SESSION['email'] = $email;
  hearder('location: 2_pagina_inicial.php');
}else{
  
    ?>
  <div class="container">
    <div class="row">
      <div class="col-8 d-flex justify-content-center">
      <div class="alert alert-warning" role="alert">
    login incorreto!!!
    </div>
      </div>
    </div>
  </div>

    

    <?php
  };
  
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
