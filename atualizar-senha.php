<?php
require "lavanderia-controle.php";

if(isset($_POST['atualizar'])){
    $id=$_POST['id'];
    $login=$_POST['login'];
    $senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);
atualizaSenha($conexao,$id,$login,$senha);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualiza Senha</title>
    <link rel="stylesheet" href="css3/estilo.css">
</head>
<body>
<header>
        <div>
            <h1><a href="index.html">Nossa Aliada</a></h1>
            <nav>
                <h2><a href="">Menu &equiv; </a></h2>
                <ul class="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="logo.php">Login</a></li>
                    <li><a href="listaCliente.php">lista Cliente</a></li>
                    <li><a href="listaLogin.php">lista Login</a></li>
                    <li><a href="cadastro.php">Cadastro</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <h1>Atualizar Senha</h1>
    <form action="" method="post">
    <div>
            <label for="id">Id</label>
            <input type="text" name="id" size="5">
        </div>
        <div>
            <label for="login">Login</label>
            <input type="text" name="login">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="text" name="senha">
        </div>
        <button type="submit" name="atualizar" >Atualizar</button >
    </form>
</body>
</html>