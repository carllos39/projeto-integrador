<?php 
require "sessao.php";
require "lavanderia-controle.php";
VerificaAcesso();

$id=$_GET['id'];
$id=$_SESSION['id'];
$$tipo=$_SESSION['tipo'];

excluirCliente($conexao,$id,$tipo);
header("location:listaCliente.php");
?>


