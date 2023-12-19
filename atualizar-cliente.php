<?php

require "lavanderia-controle.php";
$id=$_GET['id'];




$cliente = listarUmCliente($conexao,$id);

$id=$_GET['id'];
if(isset($_POST['atualizar'])){

$id=$_POST['id'];
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$pedido=$_POST['pedido'];
$email=$_POST['email'];
$senha=password_hash( $_POST['senha'],PASSWORD_DEFAULT);
$tipo=$_POST['tipo'];
alterarCliente($conexao,$id,$nome,$telefone,$pedido,$email,$senha,$tipo);
header("location:listaCliente.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualizar Cliente</title>
	<link rel="stylesheet" href="css3/estilo.css">
</head>
<body>
<header>
        <div>
            <h1><a href="inicio.html">Nossa Aliada</a></h1>
            <nav>
                <h2><a href="">Menu &equiv; </a></h2>
                <ul class="menu">
                    <li><a href="index.html">index</a></li>
                    <li><a href="logo.php">Login</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
                    <li><a href="clientes.php">lista Cliente</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <h1>atualizar Cliente</h1>
   <form action="" method="post">
        <div>  
		<label for="id">Id :</label>
		<input value="<?=$id?>" type="text" name="id" id="id" size="3">
    </div>

		<div>
		<label for="nome">Nome :</label>
		<input type="text" name="nome" id="nome">
	</div>
	<div>
		<label for="telefone">Telefone :</label>
		<input type="text" name="telefone" id="telefone">
	</div>
	<div>
		<label for="pedido">Data pedido :</label>
		<input type="date" name="pedido" id="pedido">
	</div>
	<div>
		<label for="email">Email :</label>
		<input type="text" name="email" id="email">
	</div>
	<div>
	<label for="senha">Senha :</label>
	<input type="password" name="senha" id="senha">
	</div>
	<div>
		<select name="tipo" id="tipo">
			<option value=""></option>
			<option value="visitante">visitante</option>
			<?php if($tipo=="admin"){?>
			<option value="admin">administador</option>
			  <?php } ?>
			
		</select>
	</div>
	
		<button type="submit" name="atualizar">Atualizar</button>

   </form> 
</body>
</html>