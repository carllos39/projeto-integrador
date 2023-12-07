<?php 
require "lavanderia-controle.php";
$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$login=$_POST['login'];
$senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);
$tipo=$_POST['tipo'];

inserirCliente($conexao,$nome,$email,$telefone,$login,$senha,$tipo);
 ?>








