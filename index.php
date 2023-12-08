<?php 
require "lavanderia-controle.php";

if(isset($_POST['logar'])){

if(empty($login=$_POST['login'] || empty($senha=($_POST['senha'])))){
header("location:index.php?acesso_negado!");
exit;
}
$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
//Busca o login no banco
$cliente= buscarCliente($conexao, $login,$senha);
var_dump($cliente);


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
    <div>
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
    </div>
    <div>
        <label for="senha">Senha :</label>
        <input type="password" name="senha" id="senha">
    </div> 
    <input type="submit" name="logar"  value="Logar">
</form>
</body>
</html>
