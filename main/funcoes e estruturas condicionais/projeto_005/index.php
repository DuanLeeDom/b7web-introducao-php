<?php

function saudacao($nome)
{
    return 'Olá $nome';
}
function somar($num1, $num2, $num3 = null)
{
    if ($num3) {
        return "Número 1: $num1, Número 2: $num2, Número 3: $num3";
    } else {
        return "Número 1: $num1, Número 2: $num2";
    }
}

function verificaIdade($anoNascimento)
{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}

// echo somar(100, 200);

function portaoDeBalada($anoNascimento, $acompanhado = false)
{
    $idadeParaEntrarNaBalada = 18;
    $idade = verificaIdade($anoNascimento);

    if ($idade >= $idadeParaEntrarNaBalada) {
        return 'Pode entrar na balada';
    } elseif ($idade < $idadeParaEntrarNaBalada && $acompanhado) {
        return 'Pode entrar na balada com seu acompanhante';
    } else {
        return 'Você não pode entrar na balada';
    }
}

echo "1994 sem acompanhante: " . portaoDeBalada(1994) . "<br />";
echo "1999 com acompanhante: " . portaoDeBalada(1999, true) . "<br />";
echo "2014 com acompanhante: " . portaoDeBalada(2014, true) . "<br />";
echo "2015 sem acompanhante: " . portaoDeBalada(2015, false) . "<br />";
echo "2011 sem acompanhante: " . portaoDeBalada(2011) . "<br />";