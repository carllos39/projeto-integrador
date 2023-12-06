<?php 

require "conecta.php";
require "lavanderia-controle.php";

if(alterarCliente($conexao,$id,$nome,$email,$telefone)){?>
<p>Alterado com sucesso!</p>
<?php }else{ ?>
    <p>Não alterou!</p>
    <?php } ?>
?>