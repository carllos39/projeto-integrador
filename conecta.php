<?php 
$servidor="localhost";
$usuario="root";
$senha="";
$banco="lavanderia";
if($conexao=mysqli_connect($servidor,$usuario,$senha,$banco)){
    echo"Cadastrado com sucesso!";
}else{
    echo"Não cadastrou!";
}
?>