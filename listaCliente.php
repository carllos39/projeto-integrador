<?php 

require "lavanderia-controle.php";
require "sessao.php";
verificaCliente();
$clientes=listaCliente($conexao);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista Cliente</title>
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
                    <li><a href="atualizar-senha.php">atualiza Senha</a></li>
                    <li><a href="cadastro.php">Cadastro</a></li>
                </ul>
            </nav>
        </div>
    </header>
<h1>Lista de cliente</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ação</th>
        <th>Ação</th>
    </tr>
    <?php foreach ($clientes as $cliente) { ?>
        <tr>
            <td><?=$cliente['id']?></td>
            <td><?=$cliente['nome']?></td>
            <td><?=$cliente['email']?></td>
            <td><?=$cliente['telefone']?></td>
            <td><a href="atualizar-cliente.php?id=<?=$cliente['id']?>">Atualizar</a></td>
            <td><a href="excluirCliente.php?id=<?=$cliente['id']?>">Excluir</a></td>
        </tr>
  <?php  } ?>
</table>
</body>
</html>