<?php 
require "lavanderia-controle.php";
require "sessao.php";

<<<<<<< HEAD

=======
>>>>>>> 9cbf6ed95760660116f4e26f6098cbf689309957

$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$login=$_POST['login'];
$senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);
<<<<<<< HEAD


inserirCliente($conexao,$nome,$email,$telefone,$login,$senha);
header("Location:index.php");
=======
$tipo=$_POST['tipo'];

inserirCliente($conexao,$nome,$email,$telefone,$login,$senha,$tipo);

>>>>>>> 9cbf6ed95760660116f4e26f6098cbf689309957
 ?>








