<?php   
    $frutas = ["Laranja", "Limão"];

    $outrasFrutas = ["Abacaxi", "Uva"];

    // Adicionar um novo indice
    // $frutas[2] = "Morango";

    // Modificar um indice existente
    // $frutas[0] = "Uva";

    $quantidadeDeItems = count($frutas);

    $verificar = in_array("Laranja", $frutas);

    $todasFrutas = array_merge($frutas, $outrasFrutas);

    var_dump($todasFrutas);
?>