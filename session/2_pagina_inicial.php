<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina inicial</title>
</head>
<body>

    <h1>O usuario<?php echo $_SESSION['email'];  ?> está conectado!</h1>

</body>
</html>