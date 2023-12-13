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
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Acão</th>
            <th>Acão</th>
        </tr>
        <?php foreach ($clientes as $cliente) {?>
            <tr>
                <td><?=$cliente['id']?></td>
                <td><?=$cliente['login']?></td>
                <td><?=$cliente['senha']?></td>
                <td><a href="atualizar-cliente.php?id=<?=$cliente['id']?>">Atualizar</a></td>
            <td><a href="excluirCliente.php?id=<?=$cliente['id']?>">Excluir</a></td>
            </tr>
      <?php  } ?>

    </table>
</body>
</html>