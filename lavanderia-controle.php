<?php 
require "conecta.php";

function inserirCliente($conexao,$nome,$email,$telefone,$login,$senha,$tipo){
    $sql="INSERT INTO cliente(nome,email,telefone,login,senha,tipo) VALUES('$nome','$email','$telefone','$login','$senha','$tipo')";
    mysqli_query($conexao,$sql) or die (mysqli_error($conexao));
}

function alterarCliente($conexao,$id,$nome,$email,$telefone,$login,$senha,$tipo){
    if($tipo=='admin'){
    $sql="UPDATE cliente SET nome='$nome',email='$email',telefone='$telefone',login='$login',senha='$senha',tipo='$tipo' WHERE id=$id";
    }else{
    $sql="UPDATE cliente SET nome='$nome',email='$email',telefone='$telefone',login='$login',senha='$senha',tipo='$tipo' WHERE id=$id AND $id";

    }
    mysqli_query($conexao,$sql) or die( mysqli_error($conexao));
}
function excluirCliente($conexao,$id,$tipo){
    if($tipo=='admin'){
    $sql="DELETE FROM cliente WHERE id=$id";
    }else{
    $sql="DELETE FROM cliente WHERE id=$id AND $id";

    }
    mysqli_query($conexao,$sql) or  die(mysqli_error($conexao));
}
function listaCliente($conexao){
    $sql="SELECT * FROM cliente";

   $resultado= mysqli_query($conexao,$sql) or  die (mysqli_error($conexao));
   return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
}
function listarUmCliente($conexao,$id){
$sql="SELECT * FROM cliente WHERE id=$id";
$resultado= mysqli_query($conexao,$sql) or  die(mysqli_error($conexao));
return mysqli_fetch_assoc($resultado);

}
?>