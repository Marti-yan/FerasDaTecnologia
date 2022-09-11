<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/cliente.css">
    <title>Document</title>
</head>
</html>
<?php
include '../php/conexao.php';



$cpf = $_POST['cpf']; 
$nome = $_POST['nome'];
$nasc = $_POST['nasc'];
$genero = $_POST['genero'];
$cell = $_POST['cell'];
$email = $_POST['email'];
$senha = $_POST['senha'];   
$status = $_POST['status'];


// ------------------------------
$data_nasc = str_split($nasc);
$array_SM = array_filter($data_nasc, function($data){
    return ctype_alnum($data);
});
$data_nasc_SM = implode('', $array_SM);
// print_r($data_nasc_SM);

//{feature para tirar a mascara da data e enviar para o banco de dados sem a formatação da mascara.}

//-----------------------

$sql = "INSERT INTO clientes VALUES('$cpf','$nome', '$genero','$email','$status', '$cell','$senha',$data_nasc_SM)"; 
$mysqli->query($sql);
if ($mysqli->error) {
    echo "Erro: " . $sql . "<br>" . $mysqli->error;
} else {
    echo "<h2>Cliente cadastrado com sucesso!</h2>
    <a href='../html/clientes.php'>
        <button class='btn'>
            Voltar!
        </button>
    </a>";
}
$mysqli->close();


?>

