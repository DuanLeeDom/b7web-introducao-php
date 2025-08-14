<?php   
    $frutas = ["Laranja", "Limão"];

    echo '<pre>';

    var_dump($frutas);

    array_push($frutas, "Uva"); // Acrescentar

    array_pop($frutas, "Uva");
    
    var_dump($frutas);

    echo '<pre>';
?>