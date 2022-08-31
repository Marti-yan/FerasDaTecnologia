<?php  


include '../conexao.php';
include '../funções/funcoes.php';



$ddd = $_POST['ddd'];
$tel = $_POST['telefone'];
$genders = $_POST['genero'];


if (verificarDDD($ddd) == FALSE){
    die("DDD invalido");  
}
if (verificartelefone($_POST['telefone']) == FALSE){
    die("telefone invalido");
}   


$sql = "INSERT INTO clientes 
(ddd,telefone,genero) 
VALUES ('$ddd', '$tel', '$genders')";
$mysqli->query($sql);
echo  $mysqli->error;

?>
cliente cadastrado com sucesso!
<br>
<a href="../Read_select/select.php">Voltar!</a>