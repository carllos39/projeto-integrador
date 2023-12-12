<?php 
require "conecta.php";
require "lavanderia-controle.php";
require "sessao.php";

$login=$_POST['login'];
$senha=$_POST['senha'];

$cliente=buscarCliente($conexao, $login,$senha);

if($cliente == null){
header("location:index.php?login=0");
}else{
    logaCliente($cliente['login']);
    header("location:index.php?login=1");
    
}
die();
?>