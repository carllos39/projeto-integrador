<?php 
require "lavanderia-controle.php";



$id=$_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$login=$_POST['login'];
$senha=$_POST['senha'];
$tipo=$_POST['tipo'];


alterarCliente($conexao,$id,$nome,$email,$telefone,$login,$senha,$tipo);
header("location:listaCliente.php");
?>
