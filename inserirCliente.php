<?php 
require "lavanderia-controle.php";
require "sessao.php";



$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$login=$_POST['login'];
$senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);


inserirCliente($conexao,$nome,$email,$telefone,$login,$senha);
header("Location:index.php");
 ?>








