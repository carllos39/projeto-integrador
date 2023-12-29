 


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
<h1><a class="logo"> Nossa Aliada</a></h1>
        <ul class="menu">
            <li><a href="index.html">Início</a></li>
            <li><a href="cadastro.php">Cadastrar</a></li>
            <li><a href="clientes.php">lista Cliente</a></li>
            <li><a href="logo.php">Sair</a></li>
        </ul> 
    </header>
  <h1>Bem vindo!</h1>
  <h2>Login</h2>
  <form action="logo-controle.php" method="post" autocomplete="off">
    <?php if(isset($mensagem)){?>
        <p><?=$mensagem?></p>
        <?php } ?>
 <div>
  <label for="email">Email :</label>
  <input type="text" name="email" id="email" requerid>
 </div>
 <div>
  <label for="senha">Senha :</label>
  <input type="password" name="senha" id="senha" requerid>
 </div>
 <p>
 <button type="submit" name="entrar">Entrar</button>
 <button><a href="cadastro.php">Cadastre-se</a></button>
  </p>
  </form>
</body>
</html>

