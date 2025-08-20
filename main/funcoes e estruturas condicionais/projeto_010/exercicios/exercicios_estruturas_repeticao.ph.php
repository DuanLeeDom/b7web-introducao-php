<?php
/**
 * Exercicios com While
 */

// 1. Crie um script para escrever a tabuada do 5 (5x1 a 5x10) com while.

// $tabuadaAtual = 1;
// while ($tabuadaAtual <= 10) {
//     echo "5x$tabuadaAtual = " . 5 * $tabuadaAtual . " <br/>";
//     $tabuadaAtual++;
// }

// 2. Crie um script para escrever a soma de todos números de 1 a 20 com while.

// $contador = 1;
// $soma = 0;
// while($contador <= 20) {
//     echo "A variavel SOMA é: $soma, contador atual: $contador". '<br/>';
//     $soma += $contador;
//     $contador++;
// }

// echo "A soma é: $soma";

/**
 * Exercicios com FOR
 */

// 1. Crie um script que escreva todos números de 1 a 10 com FOR.

// for ($contador = 1; $contadro <= 10; $contador++) {
//     echo $contador . "<br/>";
// }

// 2. Escreva um script PHP que desenhe meio triângulo com asteriscos (*).
// de 10 linhas, exemplo:
/**
 * : *
 * : **
 * : ***
 *  (continua...)
 */

// for ($linhas = 1; $linhas <= 10; $linhas++) {
//     for ($asteriscos = 1; $asteriscos <= $linhas; $asteriscos++) {
//         echo "*";
//     }
//     echo "<br>";
// }

/**
 * Exercicios com FOREACH
 */

// 1. Crie um array de números ([1, 2, 3, 4, 5]) e use um loop foreach
// para somar todos os elementos do array e imprimir o resultado.

// $array = [1, 2, 3, 4, 5];
// $resultado = 0;
// foreach ($array as $numero) {
//     echo "Número atual: $numero, soma: $resultado <br/>";
//     $resultado += $numero;
// }
// echo "O resultado é $resultado";

// 2. Crie um array associativo de produtos com nome e preço
// (por exemplo, ["Produto1" => 10, "Produto2" => 20, "Produto3" => 30])
// e use um loop foreach para imprimir o nome e o preço de cada produto.

// $carrinho = ["Produto1" => 10, "Produto2" => 20, "Produto3" => 30];
// $subtotal = 0;
// foreach ($carrinho as $nome => $valor) {
//     echo "Nome: $nome, Preço: $valor <br/>";
//     $subtotal += $valor;
// }
// echo "Subtotal: R$ $subtotal";


// DESAFIO EXTRA:

$carrinho = ["Produto1" => 10, "Produto2" => 20, "Produto3" => 30];
$subtotal = 0;
foreach ($carrinho as $nome => $valor) {
    ($valor == 10) ? $subtotal += (1 * $valor) : null;
    ($valor == 20) ? $subtotal += (2 * $valor) : null;
    ($valor == 30) ? $subtotal += (3 * $valor) : null;
    echo "Nome: $nome | Valor: R$ $valor | Sub: R$ $subtotal <br/>";
}
echo "Subtotal: R$ $subtotal";

?>