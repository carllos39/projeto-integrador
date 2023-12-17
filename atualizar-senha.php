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
    <link rel="stylesheet" href="css1/estilos.css">
</head>
<body>
<header>
        <div>
            <h1><a href="inicio.html">Nossa Aliada</a></h1>
            <nav>
                <h2><a href="">Menu &equiv; </a></h2>
                <ul class="menu">
                    <li><a href="index.php">index</a></li>
                    <li><a href=""></a></li>
                    <li><a href="listaCliente.php">lista Cliente</a></li>
                </ul>
            </nav>
        </div>
    </header>
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
        <input type="submit" name="atualizar" value="atualizar" >
    </form>
</body>
</html>