 <?php
 require "sessao.php"; 
 require "lavanderia-controle.php";
 
 if(isset($_GET['acesso-negado'])){  
   $mensagem="Você deve se logar primeiro!"; 
  }elseif(isset($_GET['dados-incorretos'])){  
        $mensagem="Dados incorretos,verifique!";
     }elseif(isset($_GET['sair'])){
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
       

        if($cliente != null && password_verify($senha, $cliente['senha'])){

            login($cliente['id'], $cliente['nome'], $cliente['tipo']);
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
<h1><a href="#" class="logo"> Nossa Aliada</a></h1>
        <ul class="menu">
            <li><a href="index.html">Início</a></li>
            <li><a href="cadastro.php">Cadastrar</a></li>
            <li><a href="clientes.php">lista Cliente</a></li>
            <li><a href="logo.php">Sair</a></li>
        </ul> 
    </header>
  <h1>Bem vindo!</h1>
  <h2>Login</h2>
  <form action="" method="post" autocomplete="off">
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

 <?php
 require "sessao.php"; 
 require "lavanderia-controle.php";
 
 if(isset($_GET['acesso-negado'])){  
   $mensagem="Você deve se logar primeiro!"; 
  }elseif(isset($_GET['dados-incorretos'])){  
        $mensagem="Dados incorretos,verifique!";
     }elseif(isset($_GET['sair'])){
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
       

        if($cliente != null && password_verify($senha, $cliente['senha'])){

            login($cliente['id'], $cliente['nome'], $cliente['tipo']);
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
<h1><a href="#" class="logo"> Nossa Aliada</a></h1>
        <ul class="menu">
            <li><a href="index.html">Início</a></li>
            <li><a href="cadastro.php">Cadastrar</a></li>
            <li><a href="clientes.php">lista Cliente</a></li>
            <li><a href="logo.php?sair">Sair</a></li>
        </ul> 
    </header>
  <h1>Bem vindo!</h1>
  <h2>Login</h2>
  <form action="" method="post" autocomplete="off">
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
