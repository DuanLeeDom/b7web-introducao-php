<?php   
    /*
    Exercicio 01:
    1. Crie um array chamado Cidades contendo o nome de 5 cidades que você quer visitar.
    2. Imprima na tela o valor da terceira cidade deste array.
    */

    // $cidade = ["Paris", "Nova York", "Sydney", "Londres", "Tôquio"];
    // echo $cidade[2];

    /*
    Exercicio 02:
    1. Crie um array associativo chamado $alunos onde as chaves são os nomes de três alunos e os valores são as idades deles.
    2. Imprima a idade do segundo aluno.
    */

    // $alunos = ["Alessandro" => 33, "João" => 32, "Maria" => 31];
    // echo $alunos["João"];

    /*
    Exercicio 03:
    1. Crie um array chamado $cores contendo três cores.
    2. Adicione uma nova cor ao final do array.
    3. Remova a primeira cor do array.
    4. Imprima o array resultante.
    */

    // $cores = ["Azul", "Amarelo", "Vermelho"];
    // $cores[] = "Roxo";
    // $cores[] = "Laranja";
    // array_shift($cores);
    // print_r($cores);

    /**
     * Exercicio 04:
     * Crie um array associativo chamado $precos onde as chaves são nomes de produtos e os valores são seus preços.
     * Atualize o preço de um dos produtos adicionando + R$ 10,00.
     * Atualize o preço do primeiro produto reduzindo - R$ 1,00.
     * Imprima o array resultante.
    */

    $precos = ["Bola" => 10, "Skate" => 250, "Patinete" => 100];
    $precos["Patinete"] += 10;
    $precos["Bola"] -= 1;
    print_r($precos);



?>