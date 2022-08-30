<?php
echo date("d/m/y H:i:s"); // data completa no formato BR (y-m-d = formato americano)
echo "<br><br>";
echo date('D,M,Y'); // escrito por extenso
echo "<br><br>";
echo date('w'); // representação numerica do dia da SEMANA
echo "<br><br>";
echo date('z'); // quantos dias do ano ja se passaram
echo "<br><br>";
echo date('t'); // representação numerica do dia do mes
echo "<br><br>";
echo date('n'); //representação numerica do mes
echo "<br><br><hr><br><br>";

// ----------------------------------
$momento = 0;
echo date('d/m/Y', $momento); 
// esse trecho vai ser igual 01/01/1970 pq foi quando começaram a contar!
// -----------------------------------------

echo "<br><br>";


// 1Dia = (60*60*24) = 86400;
$dia=86400;

// 1Hora = (60*60) = 3600;
$hora=3600;

$momento2 = time() - 3600;
echo date('H:i:s', $momento2); // 1 hora atras
echo "<br><br>";

$momento2 = time() - $dia; // ontem (-1 dia)
echo date('d/m/Y', $momento2); 
echo "<br><br>";

$momento2 = time() - ($dia*10); // 10 dias atras  (-10 dia)
echo date('d/m/Y', $momento2); 
echo "<br><br>";

$momento2 = time() + ($dia*10); // 10 dias para frente  (+10 dia)
echo date('d/m/Y', $momento2); 
echo "<br><br><hr><br><br>";

$momento3 = mktime(10/*10 HORAS da manha*/,
                    0/*Minuto 0*/,
                    0/*segundos 0*/,
                    1/*janeiro*/,
                    13/*dia 13*/,
                    2004/*de 2004*/ ); 
                    // !!FAZER TUDO EM 1 LINHA!!
echo date("d/m/Y H:i:s",$momento3);                    
?>