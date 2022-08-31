
<?php 



include '../conexao.php';
include '../funções/funcoes.php';
include '../funções/verificar.php'; 


$mysqli->query("UPDATE clientes SET telefone =".$_POST['telefone'].", ddd = ".$_POST['ddd']. ",genero = '".$_POST['genero']."' WHERE id = ".$_POST['cliente_id']);

//echo "UPDATE clientes SET telefone =".$_POST['telefone'].", ddd = ".$_POST['ddd']. ", genero = '".$_POST['genero']."'  WHERE id = ".$_POST['cliente_id'];

?>

cliente alterado com sucesso!
<br>
<a href="../Read_select/select.php">Voltar!</a>