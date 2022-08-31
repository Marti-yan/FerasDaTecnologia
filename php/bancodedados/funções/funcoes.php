<?php

function verificarDDD($ddd){
    if(strlen($ddd) == 2){
        return true;
    }else{
        return false;
    }
}

function verificartelefone($telefone){
    if(strlen($telefone) == 9){
        return true;
    }else{
        return false;
    }
}

function verificarSessao(){
    if($_SESSION["usuario_logado"] == ''){
        header('location:../sessão/login.php');
    }
}

?>