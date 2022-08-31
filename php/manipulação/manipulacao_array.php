
<?php

$estados[] = 'sp';
$estados[] = 'rj';
$estados[] = 'bh';
$estados[] = 'ba';
$estados[] = 'sc';
$estados[] = 'df';
$estados[] = 'mg';

//var_dump($estados);


$cliente['nome'] = 'rafael';
$cliente['genero'] = 'masculino';
$cliente['celular'] = '11989758255';
$cliente['email'] = 'rafael@gmail.com';
$clientes[] = $cliente;


$cliente['nome'] = 'yan';
$cliente['genero'] = 'masculino';
$cliente['celular'] = '22999758256';
$cliente['email'] = 'yan@gmail.com';
$clientes[] = $cliente;

$cliente['nome'] = 'maria';
$cliente['genero'] = 'feminino';
$cliente['celular'] = '21988758650';
$cliente['email'] = 'maria@gmail.com';
$clientes[] = $cliente;

//var_dump($clientes);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de arrays</title>
</head>
<body>
    <h1>Lista de clientes</h1>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>Email:</th>
                <th>Celular:</th>
                <th>Gênero:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $clientes[0]['nome']; ?></td>
                <td><?php echo $clientes[0]['email']; ?></td>
                <td><?php echo $clientes[0]['celular']; ?></td>
                <td><?php echo $clientes[0]['genero']; ?></td>
            </tr>
            <tr>
                <td><?php echo $clientes[1]['nome']; ?></td>
                <td><?php echo $clientes[1]['email']; ?></td>
                <td><?php echo $clientes[1]['celular']; ?></td>
                <td><?php echo $clientes[1]['genero']; ?></td>
            </tr>
            <tr>
                <td><?php echo $clientes[2]['nome']; ?></td>
                <td><?php echo $clientes[2]['email']; ?></td>
                <td><?php echo $clientes[2]['celular']; ?></td>
                <td><?php echo $clientes[2]['genero']; ?></td>
            </tr>

        </tbody>
    </table>
</body>
</html>