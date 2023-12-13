<?php 
require "conecta.php";
require "lavanderia-controle.php";
require "sessao.php";

$login=$_POST['login'];
$senha=password_verify($senha,$_POST['senha']);

$cliente=buscarCliente($conexao, $login,$senha);
if($senha==true){
    logaCliente($cliente['login']);
    header("location:index.php?login=1");
}

if($cliente == null ){ 
logaCliente($cliente['login']);
header("Location:index.php?login=0");
 } else { 
   
logaCliente($cliente['login']);
 header("location:index.php?login=1");
 die();   
  } ?>

