<?php 
require "conecta.php";
require "lavanderia-controle.php";
$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$login=$_POST['login'];
$senha=$_POST['senha'];

if(inserirCliente($conexao,$nome,$email,$telefone,$login,$senha)){?>
<p>Cadastrado com sucesso!</p>
<?php } else{ ?>
<p>Não cadastrou!</p>
    <?php } ?>







?>