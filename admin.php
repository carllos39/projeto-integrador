<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administra</title>
</head>
<body>
    <h2>Olá <?=$_SESSION['nome']?> !</h2>
    <p>Você está no <b>painel de controle e administação </b> do site lavanderia Aliada e seu nivél de acesso é <?=$_SESSION['tipo']?></p>
    <?php if($_SESSION['tipo'] == "admin"){?>
        <a href="clientes.php"></a>


        <?php } ?>
</body>
</html>