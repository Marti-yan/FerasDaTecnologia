<?php

include '../conexao.php';
unset($_SESSION['usuario_logado']);
// unset serve para destruir aquela determinada variavel 
header('location:../index.html')


?>