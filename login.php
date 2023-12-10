<?php 
require "conecta.php";
require "lavanderia-controle.php";
$login=$_POST['login'];
$senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);

$cliente=buscarCliente($conexao, $login , $senha);
var_dump($cliente);
?>