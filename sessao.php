<?php 
session_start();
function clienteEstaLogado(){
    return isset($_SESSION['cliente_logado']);
}

function verificaCliente(){
    if(!clienteEstaLogado()){
        header("Location:index.php?falhaDeSeguranca=true");
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