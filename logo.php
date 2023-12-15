 <?php
 //require "sessao.php"; 
 require "lavanderia-controle.php";
 
 if(isset($_GET['acesso-negado'])){  
   $mensagem="Você deve se logar primeiro!"; 
 } 

     if(isset($_GET['dados-incorretos'])){  
        $mensagem="Dados incorretos,verifique!";
     }elseif(isset($_GET['saiu'])){
        $mensagem="Você saiu do sistema!";
     }elseif(isset($_GET['campos-obrigatorio'])){ 
        $mensagem="Preencha o email e senha!";
    }

    if(isset($_POST['entrar'])){
        if(empty($_POST['email'])|| empty($_POST['senha'])){
            header("Location:logo.php?campos-obrigatorios");
            exit;
        }
        $email = mysqli_real_escape_String($conexao,$_POST['email']);
        $senha= mysqli_real_escape_String($conexao,$_POST['senha']);

        $cliente=buscarCliente($conexao,$email);

        if($cliente != null && password_verify($senha,$senha['senha'])){
            login($cliente['id'],$cliente['nome'],$cliente['tipo']);
            header("Location:admin.php");
            exit;

        }else{
            header("Location:logo.php?dados-incorretos");
            exit;
        }

        }
    
     ?>

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
        <a href="#" class="logo"> Nossa Aliada</a>
        <ul class="menu">
            <li><a href="index.html">Início</a></li>
            <li><a href="cadastro.php">Cadastrar</a></li>
            <li><a href="#servicosnav">Serviços</a></li>
            <li><a href="index.php">Login</a></li>
            <li><a href=""></a></li>
        </ul>
    </header>
  <h1>Bem vindo!</h1>
  <h2>Login</h2>
  <form action="login.php" method="post" autocomplete="off">
    <?php if(isset($mensagem)){?>
        <p><?=$mensagem?></p>
 <div>
  <label for="email">Email :</label>
  <input type="text" name="email" id="email" requerid>
 </div>
 <div>
  <label for="senha">Senha :</label>
  <input type="text" name="senha" id="senha" requerid>
 </div>
 <p>
 <button type="submit">Entrar</button>
 <button><a href="cadastro.php">Cadastre-se</a></button>
  </p>
  </form>
</body>
</html>
<?php } ?>
