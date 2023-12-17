<?php 
require "conecta.php";
require "lavanderia-controle.php";
require "sessao.php";


if(isset($_POST['cadastrar'])){
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$pedido=$_POST['pedido'];
$email=$_POST['email'];
$senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);
$tipo=$_POST['tipo'];

inserirCliente($conexao,$nome,$telefone,$pedido,$email,$senha,$tipo);
header("Location:index.php");
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Lavanderia Nossa Aliada</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
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
                    <li><a href="clientes.php">lista Cliente</a></li>
                </ul>
            </nav>
        </div>
    </header>
<h1>Cadastro de cliente</h1>
<form action="" method="post">
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
			<option value="admin">admin</option>
		</select>
	</div>
	
	<button type="submit" name="cadastrar">Cadastrar</button>

</form>
</body>
</html>
