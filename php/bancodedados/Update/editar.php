<?php
include '../conexao.php';

$result = $mysqli->query("SELECT * FROM clientes WHERE id = ".$_GET['cliente_id']);
$cliente = $result->fetch_assoc();
// print_r ($cliente);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo dados do html</title>
</head>
<body>
    <form action="salvarAlteracao.php" method="post">

    DDD: <input type="text" value="<?php echo $cliente['ddd']; ?>" name='ddd'> <br>
    telefone: <input type="text" value="<?php echo $cliente['telefone']; ?>" name='telefone' maxlength="9"> <br>
    genero: <input type="text" value="<?php echo $cliente['genero']; ?>" name='genero'> <br>

    <input type="hidden" name="cliente_id" value="<?php echo $cliente['id']; ?>">
    <input type="submit" value="alterar">
    </form>
</body>
</html>