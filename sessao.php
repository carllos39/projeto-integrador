<?php 
//Verifica se já existe uma sessão
if(!isset($_SESSION)){
    session_start();
}
function VerificaAcesso(){
    //Significa ele não está logado
    if(!isset( $_SESSION['id'])){
//Portanto destrua os dados de sessão e redireciona para a página de login
      session_destroy();
      header("Location:logo.php?acesso-negado");
      exit;
    }
}
//Cria a variável de sessão
function login($id,$nome,$tipo){
    $_SESSION['id']=$id;
    $_SESSION['nome']=$nome;
    $_SESSION['tipo']=$tipo;
}
function logout(){
    session_destroy();
    header("Location:logo.php?sair");
    exit;
}
function verificarTipo(){
    if($_SESSION['tipo' !='admin']){
        header("Location:nao-autorizado.php");
        exit;
    }
}
?>