<?php

function saudacao($nome)
{
    return 'Olá $nome';
}

// forçamento de parametro que é (float);
function somar(float $num1, float $num2, float $num3 = null): float
{
    return $num1 + $num2 + $num3;
}

// echo somar(1, 2, 3);

function verificaIdade(int $anoNascimento): int
{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}

// echo verificaIdade(1994);

function portaoDeBalada(int $anoNascimento, bool $acompanhado = false): string
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