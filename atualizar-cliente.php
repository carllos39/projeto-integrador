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
	<link rel="stylesheet" href="css3/estilo.css">
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
		<button type="submit" >Atualizar</button>
	</div> 
   </form> 
</body>
</html>