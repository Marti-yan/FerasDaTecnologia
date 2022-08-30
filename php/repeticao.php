<?php


$week[0] = 'Domingo';
$week[1] = 'Segunda';
$week[2] = 'Terça';
$week[3] = 'Quarta';
$week[4] = 'Quinta';
$week[5] = 'Sexta';
$week[6] = 'Sabado';
$listadias = '';
$horarios = '';

for ($i = 0; $i <= 6; $i++) {
    $listadias .= '<td>' . $week[$i] . '</td>';
}



// for ($i=1; $i < 24; $i++) { 
//     $horarios .= 
//     '<tr>
//         <td>' . $i . '</td>
//         <td>' . $i . '</td>
//         <td>' . $i . '</td>
//         <td>' . $i . '</td>
//         <td>' . $i . '</td>
//         <td>' . $i . '</td>
//         <td>' . $i . '</td>
//     </tr>';
// }


$a = 0;
while ($a < 24){
    $horarios .= 
    '<tr>
        <td>' . $a . '</td>
        <td>' . $a . '</td>
        <td>' . $a . '</td>
        <td>' . $a . '</td>
        <td>' . $a . '</td>
        <td>' . $a . '</td>
        <td>' . $a . '</td>
    </tr>';
    $a++;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>repetição</title>
</head>
<body>
    <table border='1'>
        <tr>
            <?php echo $listadias; ?>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <?php echo $horarios; ?>
    </table>

<hr>
<br><br>
</body>
</html>
<?php



$medico[]='Joao';
$medico[]='Maria';
$medico[]='Cleiton';
$medicos = '';
foreach($medico as $key => $value){
    $medicos .= $value;
}
echo '<h2> ' . $medicos . ' </h2>';

echo '<h3> A quantidade de medicos é: ';
echo $key +1;
echo '</h3>';


?>
