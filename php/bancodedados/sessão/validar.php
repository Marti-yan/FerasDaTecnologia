<?php
include '../conexao.php';


if(strtolower($_POST['login']) == 'admin' && $_POST['senha'] == '1234'){
    $_SESSION['usuario_logado'] = 'admin';
    header('Location:../Read_select/select.php') ;
}else{
    die ( "Usuario ou senha invalida");
}



?>