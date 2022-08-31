<!-- <pre> -->
<?php

include '../conexao.php';
include '../funções/funcoes.php';
 verificarSessao();

$result = $mysqli->query("SELECT * FROM clientes");
// print_r($result);
// print_r($_SESSION);

$listadeclientes = '';
while ($cliente = $result->fetch_assoc()) {
    // print_r($cliente);
    $listadeclientes .= 
    '<tr>
        <td>'. $cliente['id'].'</td>
        <td>'. $cliente['ddd'] .'</td>
        <td>'. $cliente['telefone'] .'</td>
        <td> <a href="../Update/editar.php?cliente_id='.$cliente['id'].'"> Editar</a></td>
        <td> <a href="../Delete/apagar.php?cliente_id='.$cliente['id'].'"> Apagar </a></td>
    </tr>';
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD</title>
</head>
<body>
    <table border='1'>
        <tr>
            <td>Codigo</td>
            <td>ddd</td>
            <td>telefone</td>
            <td colspan='2'> <a href="../Create_inserir/insert.php">Inserir!</a></td>
        </tr>
        <?php echo $listadeclientes; ?>
    </table>
    <br>
    <a href="../sessão/deslogar.php">Deslogar</a>
</body>
</html>