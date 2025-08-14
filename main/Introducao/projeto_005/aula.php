<?php   
    /*
        String: Representa caractes no geral (texto) Ex. Alessandro
        Integer: representa números inteirosm, Ex: 10, 20, 30, 1, 5
        Float (Decimal) ou (Doble): Representa números decimais, Ex: 10.1, 1.5, 0.93 
        Boolean: Representa Verdadeiro ou False: "true", false
    */

    // Exemplo de string:
    // $nome = 'Alessandro Kobs';
    // $numeroCaracteres = strlen($nome);

    // // ===[ Todos os tipos na pratica ]===
    // // Exmeplo de integer:
    // $idade = 33;

    // // Exemplo de Float
    // $altura = 1.75;

    // // Exemplo de Boolean:
    // $estaEstudando = true; // ele não mostra o tipo mas é Boolean.

    // // Concatenar
    // echo $nome.$nome;

    // // Exibir junto com string
    // echo "Meu nome é: $nome";
    
    // =============================
    // Exercicio 1: Imprimir o texto: 
    // "*Seu nome é: Alessandro Kobs, ele tem 10 caracteres*"

    // // exemplo de string
    // $nome_inteiro = 'Duan Lee Dom';
    
    // // strlen() - Conta o número de caracteres de uma string.
    // $caracteres_nome = strlen($nome_inteiro);


    // echo "Seu nome é: $nome_inteiro, ele tem $caracteres_nome caracteres.";

    // ============================= 
    // exemplo de string
    // $texto = 'Pera, uva, maçã e salada mista';
    
    // // strlen() - Conta o número de caracteres de uma string.
    // $numeroCaracteres = strlen($texto);

    // // strpos() - busca a posição de uma palavra de uma string.
    // $posicaoPalavraUva = strpos($texto, "uva");
    // echo $posicaoPalavraUva;

    // Exercicio: Buscar a posição das palavras uva e Pera, e escrever:
    // A palavra uva começa na posição X, e pera na posição Y.

    // Exemplo de string:
    $texto = 'Pera, uva, maçã e salada mista';

    // strpos() - busca a posição de uma palavra em uma string.
    $numeroCaracteres = strlen($texto);
    $caracteresPalavraPera = strlen("Pera");
    $caracteresPalavraUva = strlen("uva");
    $caracteresPalavraMaca = strlen("maçã");

    // strpos() - busca a posição de uma palavra em uma string.
    $posicaoPalavraUva = strpos($texto, "uva");
    $posicaoPalavraPera = strpos($texto, "Pera");
    $posicaoPalavraMaca = strpos($texto, "maçã");

    // substr() - Retorna uma parte de uma string
    $parteDaString = substr($texto, 6, 4);

    $palavraUva = substr($texto, $posicaoPalavraUva, $caracteresPalavraUva);
    $palavraPera = substr($texto, $posicaoPalavraPera, $caracteresPalavraPera);
    $palavraMaca = substr($texto, $posicaoPalavraMaca, $caracteresPalavraMaca);


    // Exercicio: Retirar a penas a palavra Pera, usando a função substr()
    echo "$palavraPera <br/>";
    echo "$palavraUva <br/>";
    echo "$palavraMaca <br/>";

?>