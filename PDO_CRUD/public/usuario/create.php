<?php
   include'../../config/connection.php'; 


?>

<form action="create.php" method="POST">
<label for="username">Nome do Usuario</label>
<input type="text" nome="username" id="username">
<br><br>
<label for="password" name="password" id="password">senha</label>
<br><br>
<button type="submit">Cadastrar</button>
</form>

<?php
$username = isset($_POST['username']) ? $_POST['username'] : exit() ;
$username = isset($_POST['password']) ? $_POST['password'] : exit() ;

// statement
$stmt = $pdo->prepare('INSERT INTO usuario (id, username, password) VALUE(:id, usernme, :password)');
$stmt -> bindParam(:id, 0);
$stmt -> bindParam(:username, username);
$stmt -> bindParam(:password, password);
$stmt -> execute();
?>