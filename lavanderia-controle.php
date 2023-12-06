<?php 
require "conecta.php";

function inserirCliente($conexao,$nome,$email,$telefone,$login,$senha){
    $sql="INSERT INTO cliente(nome,email,telefone,login,senha) VALUES('$nome','$email','$telefone','$login','$senha')";
    mysqli_query($conexao,$sql) or die (mysqli_error($conexao));
}

function alterarCliente($conexao,$id,$nome,$email,$telefone,$login,$senha){
    $sql="UPDATE cliente SET nome='$nome',email='$email',telefone='$telefone',login='$login',senha='$senha' WHERE id=$id)";

    mysqli_query($conexao,$sql) or die( mysqli_error($conexao));
}
function excluirCliente($conexao,$id){
    $sql="DELETE FROM cliente WHERE id=$id)";

    mysqli_query($conexao,$sql) or  die (mysqli_error($conexao));
}
function listaCliente($conexao){
    $sql="SELECT id,nome,email,telefone FROM cliente";

   $resultado= mysqli_query($conexao,$sql) or  die (mysqli_error($conexao));
   return mysqli_fetch_assoc($resultado);
}
?>