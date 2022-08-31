<?php

if (verificarDDD($_POST['ddd']) == FALSE){
    die("DDD invalido");  
}
if (verificartelefone($_POST['telefone']) == FALSE){
    die("telefone invalido");
}   

?>