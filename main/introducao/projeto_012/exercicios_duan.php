<?php   
    /*
    Exercicio 01:
    1. Crie um array chamado Cidades contendo o nome de 5 cidades que você quer visitar.
    2. Imprima na tela o valor da terceira cidade deste array.
    */

    $cidadesSaoPaulo = array("São Paulo", " São Caetano do Sul", "Barueri", " Jaguariúna", "Santana de Parnaíba");
    echo $cidadesSaoPaulo[2];


    echo '<br/>';
    /*
    Exercicio 02:
    1. Crie um array associativo chamado $alunos onde as chaves são os nomes de três alunos e os valores são as idades deles.
    2. Imprima a idade do segundo aluno.
    */

        $aluno = array("Ricardo", "Leticia", "Matheus");

        $referencias = [
            "Ricardo" => ["idade" => 15],
            "Leticia" => ["idade" => 22],
            "Matheus" => ["idade" => 19]
        ];

    echo $referencias["Leticia"]["idade"];


    echo '<br/>';
    /*
    Exercicio 03:
    1. Crie um array chamado $cores contendo três cores.
    2. Adicione uma nova cor ao final do array.
    3. Remova a primeira cor do array.
    4. Imprima o array resultante.
    */

    $cores = array("red", "green", "blue");

    array_push($cores, "purple"); // colocar uma cor

    array_shift($cores); // Retirar primeira cor

    var_dump($cores); // Mostar cores

    echo '<br/>';
    /**
     * Exercicio 04:
     * Crie um array associativo chamado $precos onde as chaves são nomes de produtos e os valores são seus preços.
     * Atualize o preço de um dos produtos adicionando + R$ 10,00.
     * Atualize o preço do primeiro produto reduzindo - R$ 1,00.
     * Imprima o array resultante.
    */

    $precos = ["carne", "leite", "ovo"];

    $produtos = [
        "carne" => [
            "valor" => 42.24
        ],
        "leite" => [
            "valor" => 15.12
        ],
        "ovo" => [
            "valor" => 30.36
        ]
    ];

    $produtos["leite"]["valor"] += 10;

    $produtos["carne"]["valor"] -= 1;

    echo "<pre>";
    print_r($produtos);
    echo "<pre/>";
    



    


?>