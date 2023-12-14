<?php 
require "conecta.php";
function buscarCliente($conexao,$login){
    $sql="SELECT * FROM cliente WHERE login ='$login'";

    $resultado= mysqli_query($conexao,$sql) or  die(mysqli_error($conexao));
    $cliente=mysqli_fetch_assoc($resultado);
    return $cliente;

}

function inserirCliente($conexao,$nome,$email,$telefone,$login,$senha){
    $sql="INSERT INTO cliente(nome,email,telefone,login,senha) VALUES('$nome','$email','$telefone','$login','$senha')";
    mysqli_query($conexao,$sql) or die (mysqli_error($conexao));
}

function alterarCliente($conexao,$id,$nome,$email,$telefone){
    $sql="UPDATE cliente SET nome='$nome',email='$email',telefone='$telefone' WHERE id=$id";

    mysqli_query($conexao,$sql) or die( mysqli_error($conexao));
}
function atualizaSenha($conexao,$id,$login,$senha){
$sql="UPDATE cliente SET login='$login',senha='$senha' WHERE id=$id";
mysqli_query($conexao,$sql) or  die (mysqli_error($conexao));
}

function excluirCliente($conexao,$id){
    
    $sql="DELETE FROM cliente WHERE id=$id"; 
    
    mysqli_query($conexao,$sql) or  die(mysqli_error($conexao));
}
function listaCliente($conexao){
    $sql="SELECT id, nome,email,telefone,login,senha FROM cliente";

   $resultado= mysqli_query($conexao,$sql) or  die (mysqli_error($conexao));
   return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
}
function listarUmCliente($conexao,$id){
$sql="SELECT * FROM cliente WHERE id=$id";
$resultado= mysqli_query($conexao,$sql) or  die(mysqli_error($conexao));
return mysqli_fetch_assoc($resultado);
}

?>