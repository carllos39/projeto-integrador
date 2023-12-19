<?php 
require "sessao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administra</title>
    <link rel="stylesheet" href="css3/estilo.css">
</head>
<body>
<header>
       <h1><a href="#" class="logo"> Nossa Aliada</a></h1>
        <ul class="menu">
            <li><a href="index.html">Início</a></li>
            <li><a href="cadastro.php">Cadastrar</a></li>
            <li><a href="#servicosnav">Serviços</a></li>
            <li><a href="index.php">Login</a></li>
            <li><a href=""></a></li>
        </ul>
    </header>
    <article>
    <h2>Olá <?=$_SESSION['nome']?>!</h2>
    <p>Você está no <b>painel de controle e administação </b> do site lavanderia Aliada e seu nivél de acesso é <?=$_SESSION['tipo']?></p>
    <?php if($_SESSION['tipo'] == "admin"){?>
        <button><a href="clientes.php">Gerenciar cliente</a></button>

        <?php } else{?>
            <button><a href="clientes.php">Gerenciar Conta</a></button>
       <?php } ?>
    </article>
</body>
</html>