<?php 
require "sessao.php";
logout();
header("Location:  index.php?logout=true");
die();
?>