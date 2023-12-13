<?php
require "lavanderia-controle.php";
$id=$_GET['id'];

$cliente = listarUmCliente($conexao,$id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualizar Cliente</title>
</head>
<body>
    <h1>atualizar Cliente</h1>
   <form action="alterarCliente.php" method="post">
   <div>
		<label for="id">Id :</label>
		<input value="<?=$id?>" type="text" name="id" id="id">
	</div>
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
		<input type="text" name="senha" id="senha">
	</div>
	<div>
	<select name="tipo">
		<option value=""></option>
		<option value="visitante">visitante</option>
		<option value="admin">admin</option>
	</select>
	</div>
	<div>
		<input type="submit" value="atualizar">
	</div> 
   </form> 
</body>
</html>