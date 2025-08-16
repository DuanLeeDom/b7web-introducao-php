<?php   
  
    $nome = array("Alessandro", "João");

    $numeros = [1, 2, 30];

    $carros = [
        "Alessandro" => 1,
        "Maria" => 2,
        "João" => 30
    ];

    $informacoes = [
        "Alessandro" => [
            "carros" => 1,
            "idade" => 32,
            "altura" => 174
        ],
        "João" => [
            "carros" => 2,
            "idade" => 35,
            "altura" => 160,
            "cidade" => "São Paulo"
        ]
    ];

    echo '<pre>';
    var_dump($informacoes["Alessandro"]["carros"]);
    echo '</pre>';
?>