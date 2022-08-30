<?php

// if (date('H') > 12 ){
//     echo 'pos meio dia';
// }else{
//     echo 'antes de meio dia';
// }

$cidade = "RJ";
$idade = 18;

if (date('H') > 12 ){
    $dia = "pos meio dia"; 
}else {
    $dia = "antes de meio dia";
}

if ($cidade == "RJ"){
    if ($idade >= 18 && $cidade == "RJ"){
        echo $dia . " Na cidade do crime";
    }else{
        echo $dia . " No maravilhoso Rio de Janeiro";
    }
}else{
    echo $dia . " em sua bela cidade";
}

echo '<hr>';

if( (date('H') < 12)  &&  ($cidade == "RJ" || $idade >=18)){
    echo 'Não é nem meio dia no Rio meu chapa';
};

echo '<hr>';

switch ($cidade) {
    case 'RJ':
        echo 'Muito crime nesse lugar / ';
        if (date('H') > 12) {
            echo "ate 17h ta com menos crime";
        }else{
            echo 'vai pra casa doidão, ta correndo perigo';
        }
        break;
    
    case 'SP':
        echo 'muito transito';
        break;    
    default:
        echo 'sei onde se esta não malucão';
        break;
}
?>