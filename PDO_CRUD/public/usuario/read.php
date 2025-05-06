<?php 
include '../../config/connection.php';

$stmt = $pdo->query('SELECT * FROM usuario');
$usuarios = $stmt->fetchAll();

// echo"<pre>";
// echo var_dump($usuarios);

?>

<?php foreach ($usuarios as $indice => $user) { ?>
    <p>
    <strong>Nome de Heroina:</stong><?php echo $user['username']; ?>
    <a href="">remover</a>
    <a href="">editar</a>
   </p>
   <hr>
<?php } ?>

