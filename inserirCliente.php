<?php 
require "lavanderia-controle.php";
require "sessao.php";

verificaUsuario();

$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$login=$_POST['login'];
$senha=$_POST['senha'];
$tipo=$_POST['tipo'];

inserirCliente($conexao,$nome,$email,$telefone,$login,$senha,$tipo);
 ?>








