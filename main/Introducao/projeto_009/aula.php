<?php   
    // Exemplo de Float
    // colocando o ponto já considera que é float.
    $altura = 1;
    $altura = 1.75;

    $num1 = 1.10;
    $num2 = 2.50;

    // echo 'Multiplicação: '. ($num1 * $num2). '<br/>';
    // echo 'Adição: '. ($num1 + $num2). '<br/>';
    // echo 'Subtração: '. ($num1 - $num2). '<br/>';
    // echo 'Divisão: '. ($num1 / $num2). '<br/>';

    // Arredondamento

    // round() - ele arredonda para cima de 5 | num >= 5
    // $num3 = 2.50;
    // echo 'Arredondamento com round(): '. round($num3);

    // floor() - ele ignora os decimais
    // $num3 = 3.99999;
    // echo 'Arredondamento com floor(): '. floor($num3);

    // ceil() - ele arredonda sempre para cima
    $num3 = 5.001;
    $numeroArredondadoParaCima = ceil($num3);
    echo 'Arredondamento com ceil(): '. $numeroArredondadoParaCima;
?>