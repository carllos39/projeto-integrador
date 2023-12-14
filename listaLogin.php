<?php 
require "lavanderia-controle.php";
$clientes=listaCliente($conexao);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Login </title>
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
    <table>
        <tr>
            <th>Id</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Acão</th>
        </tr>
        <?php foreach ($clientes as $cliente) {?>
            <tr>
                <td><?=$cliente['id']?></td>
                <td><?=$cliente['login']?></td>
                <td><a href="atualizar-senha.php?id=<?=$cliente['id']?>">Atualizar</a></td>
                 <td><a href="excluirCliente.php?id=<?=$cliente['id']?>">Excluir</a></td>
            </tr>
      <?php  } ?>

    </table>
</body>
</html>