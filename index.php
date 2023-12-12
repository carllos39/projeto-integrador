 <?php
 require "sessao.php"; 
 ?>
<?php if(isset($_GET['login']) && $_GET['login']==true){ ?> 
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
</head>
<body>
    <h1>Bem vindo!</h1>
    <?php if(clienteEstaLogado()){ ?>
<p>Você está logado como <?=clienteLogado();?> <a href="logout.php">Deslogar</a></p>
        <?php }else{ ?>
        <h2>Login</h2>

    <form action="login.php" method="post">
    <div>
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
    </div>
    <div>
        <label for="senha">Senha :</label>
        <input type="password" name="senha" id="senha">
    </div> 
    <input type="submit" value="Logar">
</form>
</body>
</html>
<?php } ?>

