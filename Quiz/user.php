<?php session_start();  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
  <body>
    
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                <form action="./user.php" method="post">
                    <div class="mb-3">
                        <label for="form-label">Digite seu nome</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary">inciar teste</button>
                </form>
            </div>
        </div>
    </div>


    <?php
    if(!isset($_POST['name'])){
        echo 'preencha seu nome completo';
    }
    if(empty($_POST('name'))){
        echo 'o nome é obrigatorio';
    }

    $_SESSION['user'] = $_POST['name'];

    header('locantion: question1.php');
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>