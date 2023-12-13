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
  <link rel="stylesheet" href="css1/estilos.css">
</head>
<body>
 
  <div class="container-login">
    <h2>Entrar</h2>
    <form class="inserirCliente" method="post">
      <div class="grupo-formulario">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="login" required>
      </div>
 
      <div class="grupo-formulario">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
      </div>
 
      <div class="botoes-login">
        <button type="submit" class="botao-login">Entra</button>
        <button type="text" class="botao-cadastrar">Cadastrar-se</button>
      </div>
    </form>
  </div>
 
</body>
</html>
 
</html>


