<?php
require "sessao.php"; 
require "lavanderia-controle.php";
VerificaAcesso();
if(isset($_GET['sair'])){
    logout();
}

$id=$_SESSION['id'];

$tipo=$_SESSION['tipo'];



$clientes=lerCliente($conexao,$id,$tipo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="css3/estilo.css">
</head>
<body>
<header>
<h1><a href="#" class="logo"> Nossa Aliada</a></h1>
        <ul class="menu">
            <li><a href="index.html">Início</a></li>
            <li><a href="logo.php">Login</a></li>
            
            <li><a href="clientes.php">Lista</a></li>
            <li><a href="logo.php">Sair</a></li>
        </ul>
    </header>
    <h2>Cliente</h2>
    <span>
      <p><b>Quantidade de cliente <?=count($clientes)?> cadastrado<?php if($clientes>1 ) echo"s"?> <b></p>
    
    </span>

    <p>Inserir novo Cliente</p>

    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Pedido</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Ação</th>
            <th>Ação</th>
        </tr>
     <?php foreach ($clientes as $cliente) {?>
        <tr>
            
            <td><?=$cliente['nome']?></td>
            <td><?=$cliente['telefone']?></td>
            <td><?=dataFormatada($cliente['pedido'])?></td>
            <td><?=$cliente['email']?></td>
            <td><?=$cliente['tipo']?></td>
            <td><a href="atualizar-cliente.php?id=<?=$cliente['id']?>">Atualizar</a></td>
            <td><a href="excluirCliente.php?id=<?=$cliente['id']?>">Excluir</a></td>
        </tr>
    
    <?php } ?>
    </table>
    
</body>
</html>