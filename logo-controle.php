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