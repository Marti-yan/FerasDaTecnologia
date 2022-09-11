<?php
session_start();
$mysqli = new mysqli("localhost", "root", "@13DEjaneiro", "sistema");
 //print_r($mysqli);
 if (mysqli_connect_errno()){
    echo "Erro ao conectar ao banco de dados: ".mysqli_connect_error();
    exit();
} else{
    //echo "conectado";
}
?>