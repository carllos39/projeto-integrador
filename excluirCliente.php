<?php 
require "conecta.php";
require "lavanderia-controle.php";

if(excluirCliente($conexao,$id)){?>
<p>Exclido com sucesso!</p>
<?php }else{ ?>
    <p>Não excluiu!</p>
    <?php } ?>

