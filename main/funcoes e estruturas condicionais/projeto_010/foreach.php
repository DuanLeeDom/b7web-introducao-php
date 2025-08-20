<?php
/*
=============================================
 EXEMPLOS DE USO DO FOREACH EM PHP
=============================================
 O foreach é uma estrutura de repetição usada
 para percorrer todos os elementos de um array.
 A cada iteração, ele atribui o valor atual a
 uma variável temporária (e opcionalmente a chave).
=============================================
*/

// -------------------------------------------
// Exemplo 1: Array associativo (chave => valor)
// -------------------------------------------
$dados = [
    "nome"  => "Alessandro",
    "idade" => 33
];

foreach ($dados as $chave => $valor) {
    echo "$chave : $valor <br/>";
}
/*
Saída:
nome : Alessandro
idade : 33
*/

// -------------------------------------------
// Exemplo 2: Array simples (somente valores)
// -------------------------------------------
// $nomes = [
//     'Alessandro',
//     'Bonieky',
//     'João',
//     'Maria'
// ];

// foreach ($nomes as $nome) {
//     echo "$nome <br/>";
// }
/*
Saída:
Alessandro
Bonieky
João
Maria
*/

// -------------------------------------------
// Exemplo 3: Comparando foreach com for clássico
// -------------------------------------------
// for ($i = 0; $i < count($nomes); $i++) {
//     echo $nomes[$i] . "<hr/>";
// }
/*
Saída:
Alessandro
----------------
Bonieky
----------------
João
----------------
Maria
----------------
*/
?>
