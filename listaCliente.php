<?php 
require "conecta.php";
require "lavanderia-controle.php";
$clientes=listaCliente($conexao);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista Cliente</title>
</head>
<body>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
    </tr>
    <?php foreach ($clientes as $cliente) {?>
        <tr>
            <td><?=$cliente['id']?></td>
            <td><?=$cliente['nome']?></td>
            <td><?=$cliente['email']?></td>
            <td><?=$cliente['telefone']?></td>
            <a href="atualizarCliente.php?id=<?=$cliente['id']?>">Atualizar cliente</a>
            <a href="excluirCliente.php?id=<?=$cliente['id']?>">Excluir cliente</a>
        </tr>
  <?php  } ?>
</table>
</body>
</html>