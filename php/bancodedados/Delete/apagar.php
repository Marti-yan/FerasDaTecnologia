<?php 



include '../conexao.php';


$mysqli->query("DELETE FROM clientes  WHERE id = ".$_GET['cliente_id']);

echo "DELETE FROM clientes  WHERE id = ".$_GET['cliente_id'];

?>
<br>
cliente removido com sucesso!
<br>
<a href="../Read_select/select.php">Voltar!</a>