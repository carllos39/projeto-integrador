<?php 
require "conecta.php";
require "lavanderia-controle.php";
require "sessao.php";

$login=$_POST['login'];
$senha=password_verify($senha,$_POST['senha']);
<<<<<<< HEAD


$cliente=buscarCliente($conexao, $login,$senha);

if($senha==true){
    logaCliente($cliente['login']);
    header("location:index.php?login=1");
}

if($cliente == null){

header("Location:index.php?login=0");

header("Location:cadastro.php");

}else{
=======

$cliente=buscarCliente($conexao, $login,$senha);
if($senha==true){
>>>>>>> 9cbf6ed95760660116f4e26f6098cbf689309957
    logaCliente($cliente['login']);
    header("location:index.php?login=1");
}

if($cliente == null ){ 
logaCliente($cliente['login']);
header("Location:index.php?login=0");

header("Location:cadastro.php");

 } else { 
   
logaCliente($cliente['login']);
 header("location:index.php?login=1");
 die();   
  } ?>

