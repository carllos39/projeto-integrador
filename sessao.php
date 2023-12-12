<?php 
session_start();

function verificaUsuario(){
    if(!clienteEstaLogado()){
        header("location:index.php?falhaDeSeguranca=true");
        die();
    }
}

function clienteLogado(){
    return $_SESSION["cliente_logado"];
}

function logaCliente($login){
    $_SESSION['cliente_logado']=$login;
}
function logout(){
    session_destroy();
}
?>