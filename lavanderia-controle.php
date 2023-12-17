<?php 
require "conecta.php";
function buscarCliente($conexao,$email){
    $sql="SELECT * FROM cliente WHERE email ='$email'";

    $resultado= mysqli_query($conexao,$sql) or  die(mysqli_error($conexao));
    $cliente=mysqli_fetch_assoc($resultado);
    return $cliente;

}

function inserirCliente($conexao,$nome,$telefone,$pedido,$email,$senha,$tipo){
    $sql="INSERT INTO cliente(nome,telefone,pedido,email,senha,tipo) VALUES('$nome','$telefone','$pedido','$email','$senha','$tipo')";
    mysqli_query($conexao,$sql) or die (mysqli_error($conexao));
}

function alterarCliente($conexao,$id,$nome,$telefone,$pedido,$email,$senha,$tipo){
    if($tipo=="admin"){
    $sql="UPDATE cliente SET nome='$nome',telefone='$telefone',pedido='$pedido',email='$email',senha='$senha',tipo='$tipo' WHERE id=$id";
    }else{
    $sql="UPDATE cliente SET nome='$nome',telefone='$telefone',pedido='$pedido',email='$email',senha='$senha',tipo='$tipo' WHERE id=$id AND cliente=$id";
    }

    mysqli_query($conexao,$sql) or die( mysqli_error($conexao));
}

function atualizaSenha($conexao,$id,$login,$senha,$tipo){
    if($tipo=="admin"){
    $sql="UPDATE cliente SET login='$login',senha='$senha',tipo='$tipo' WHERE id=$id";
    }else{
    $sql="UPDATE cliente SET login='$login',senha='$senha',tipo='$tipo' WHERE id=$id AND cliente=$id";
    }
mysqli_query($conexao,$sql) or  die (mysqli_error($conexao));
}

function excluirCliente($conexao,$id,$tipo){
    if($tipo=="admin"){
    $sql="DELETE FROM cliente WHERE id=$id"; 
    }else{
        $sql="DELETE FROM cliente WHERE id=$id AND cliente=$id"; 

    }
    mysqli_query($conexao,$sql) or  die(mysqli_error($conexao));
}

function listaCliente($conexao,$id){
    if($tipo=="admin"){
    $sql="SELECT id, nome,email,telefone,login,senha FROM cliente";
    }else{
        $sql="SELECT id, nome,email,telefone,login,senha FROM cliente WHERE =id AND id" ;

    }

   $resultado= mysqli_query($conexao,$sql) or  die (mysqli_error($conexao));
   return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
}

function listarUmCliente($conexao,$id){
$sql="SELECT * FROM cliente WHERE id=$id";
$resultado= mysqli_query($conexao,$sql) or  die(mysqli_error($conexao));
return mysqli_fetch_assoc($resultado);
}
function lerCliente($conexao,$id,$tipo){
    if($tipo=="admin"){
    $sql="SELECT id,nome,email,tipo FROM cliente ORDER BY nome";
    }else{
        $sql="SELECT id,nome,email,tipo FROM cliente WHERE id=$id";
    }
    $resultado=mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
    return mysqli_fetch_all($resultado,MYSQLI_ASSOC);

}

?>