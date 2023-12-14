 <?php
 require "sessao.php"; 
 ?>
<?php if(isset($_GET['logout']) && $_GET['logout']==true){ ?> 
    <p>Deslogado com sucesso!</p>
    <?php } ?>

    <?php if(isset($_GET['login']) && $_GET['login']==false){ ?> 
    <p>Usuário ou senha inválida!</p>
    <?php } ?>

    <?php if(isset($_GET['falhaDeSeguranca']) && $_GET['falhaDeSeguranca']==true){ ?> 
    <p>Você não tem acesso a essa funcionalidade!</p>

    <?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
 <link rel="stylesheet" href="css3/estilo.css">
</head>
<body>
<header>
        <h1><a href="#" class="logo"> Nossa Aliada</a></h1>
        <ul class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="cadastro.php">Cadastrar</a></li>
            <li><a href="listaCliente.php">lista</a></li>
            <li><a href=""></a></li>
        </ul>
    </header>
  <h2>Bem vindo!</h2>

  <?php if(clienteEstaLogado()) { ?>
  <p>Você esta logado como <b><?=clienteLogado();?></b> <button><a href="logout.php">Deslogar</a></button></p>
  <?php }else{ ?>

  <h2>Login</h2>
  <form action="login.php" method="post">
 <div>
  <label for="login">Login :</label>
  <input type="text" name="login" id="login">
 </div>
 <div>
  <label for="senha">Senha :</label>
  <input type="text" name="senha" id="senha">
 </div>
 <p>
 <button type="submit">Logar</button>
 <button><a href="cadastro.php">Cadastre-se</a></button>
  </p>
  </form>
</body>
</html>
<?php } ?>
