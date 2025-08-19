<?php

// function saudacao($nome)
// {
//     return 'Olá $nome';
// }

// // forçamento de parametro que é (float);
// function somar(float $num1, float $num2, float $num3 = null): float
// {
//     return $num1 + $num2 + $num3;
// }

// // echo somar(1, 2, 3);

// function verificaIdade(int $anoNascimento): int
// {
//     $anoAtual = date('Y');
//     $idade = $anoAtual - $anoNascimento;
//     return $idade;
// }

// // echo verificaIdade(1994);

// function portaoDeBalada(int $anoNascimento, bool $acompanhado = false): string
// {
//     $idadeParaEntrarNaBalada = 18;
//     $idade = verificaIdade($anoNascimento);

//     if ($idade >= $idadeParaEntrarNaBalada) {
//         return 'Pode entrar na balada';
//     } elseif ($idade < $idadeParaEntrarNaBalada && $acompanhado) {
//         return 'Pode entrar na balada com seu acompanhante';
//     } else {
//         return 'Você não pode entrar na balada';
//     }
// }

// echo "1994 sem acompanhante: " . portaoDeBalada(1994) . "<br />";
// echo "1999 com acompanhante: " . portaoDeBalada(1999, true) . "<br />";
// echo "2014 com acompanhante: " . portaoDeBalada(2014, true) . "<br />";
// echo "2015 sem acompanhante: " . portaoDeBalada(2015, false) . "<br />";
// echo "2011 sem acompanhante: " . portaoDeBalada(2011) . "<br />";


// ISSO É UMA FUNÇÃO ACIMA DO PHP 8.X

function parametrosNomeados(string $nome, string $sobrenome, int $idade)
{
    return "Olá, $nome $sobrenome. Você tem $idade anos.";
}

// o importante é ter parametros caso não queira se importar com a ordem.
// echo parametrosNomeados(idade: 34, sobrenome: 'Kobs', nome: 'Alessandro');

function somar($n1, $n2)
{
    return $n1 + $n2;
}

echo somar(n2: 30, n1: 10);