<?php 
require "lavanderia-controle.php";



$id=$_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];

alterarCliente($conexao,$id,$nome,$email,$telefone);
header("location:listaCliente.php");
?>
