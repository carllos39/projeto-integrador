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
		
		<noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="inicio.html">Início</a></li>

								<li><a href="delivery.html">Delivery</a></li>
								<li><a href="cadastro.html">Cadastro</a></li>
								<li><a href="listaCliente.php">Lista</a></li>
								<li><a href="login.php">Login</a></li>
							</ul>
						</nav>

				</div>

</div>
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
	<select name="tipo">
		<option value=""></option>
		<option value="visitante">visitante</option>
		<option value="admin">admin</option>
	</select>
	</div>
	<div>
		<input type="submit">
	</div>
</form>
</body>
</html>
