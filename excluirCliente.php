<?php 
require "lavanderia-controle.php";
$id=$_GET['id'];

excluirCliente($conexao,$id);
header("location:listaCliente.php");
?>


