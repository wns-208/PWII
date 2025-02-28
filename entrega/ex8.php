<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio1entrega.php" method="get">

<legend>numeros</legend>
            <label for="nome">informe sua nome</label>
            <input type="nome" name="nome" id="nome" placeholder="0" required>

            <label for="vendas">informe sua vendas</label>
            <input type="vendas" name="vendas" id="vendas" placeholder="0" required>
</form>
<?php
 if (isset($_GET['nome'])) {
    $nome =$_GET['nome'];

   if (isset($_GET['vendas'])) 
        $vendas=$_GET['vendas'];
    if($vendas<1000){
        echo $nome+'NÃO TEM BONUS';
    }
    else if($vendas>1000 && $vendas<=2000){
        echo
    }
 }
    ?>