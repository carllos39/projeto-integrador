<?php 
require "conecta.php";
require "lavanderia-controle.php";
require "sessao.php";

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
                    <li><a href="index.html">Home</a></li>
                    <li><a href=""></a></li>
                    <li><a href="listaCliente.php">lista Cliente</a></li>
                </ul>
            </nav>
        </div>
    </header>
<h1>Cadastro de cliente</h1>
<form action="inserirCliente.php" method="post">
	<div>
		<label for="nome">Nome :</label>
		<input type="text" name="nome" id="nome">
	</div>
	<div>
		<label for="e-mail">E-mail :</label>
		<input type="text" name="email" id="email">
	</div>
	<div>
		<label for="telefone">Telefone :</label>
		<input type="text" name="telefone" id="telefone">
	</div>
	<div>
		<label for="login">Login :</label>
		<input type="text" name="login" id="login">
	</div>
	<div>
	<label for="senha">Senha :</label>
	<input type="password" name="senha" id="senha">
	</div>
	<div>
	<div>
	<button type="submit">Cadastrar</button>
	</div>
</form>
</body>
</html>
