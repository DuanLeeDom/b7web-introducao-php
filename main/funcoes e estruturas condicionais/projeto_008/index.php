<?php

/**
 * Saudação
 * @param mixed $nome Nome da pessoa
 * @return string Saudação
 */
function saudacao($nome)
{
    return 'Olá $nome';
}

// forçamento de parametro que é (float);
/**
 * Somador de números
 * @param float $num1 Número 1 da soma
 * @param float $num2 Número 2 da soma
 * @param float $num3 Número 3 da soma
 * @return float Somatoria
 */
function soma1(float $num1, float $num2, float $num3 = null): float
{
    return $num1 + $num2 + $num3;
}

// echo soma1(1, 2, 3);

/**
 * Verificar Idade
 * @param int $anoNascimento Data de nascimento da pessoa
 * @return int Idade
 */
function verificaIdade(int $anoNascimento): int
{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}

// // echo verificaIdade(1994);

/**
 * Verificação de idade
 * @param int $anoNascimento Data de nascimento da pessoa
 * @param bool $acompanhado Acompanhado com alguém? S/N
 * @return string validador para passagem
 */
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

// echo "1994 sem acompanhante: " . portaoDeBalada(1994) . "<br />";
// echo "1999 com acompanhante: " . portaoDeBalada(1999, true) . "<br />";
// echo "2014 com acompanhante: " . portaoDeBalada(2014, true) . "<br />";
// echo "2015 sem acompanhante: " . portaoDeBalada(2015, false) . "<br />";
// echo "2011 sem acompanhante: " . portaoDeBalada(2011) . "<br />";


// ISSO É UMA FUNÇÃO ACIMA DO PHP 8.X


/**
 * Gera uma string de saudação
 * @param string $nome Nome da pessoa
 * @param string $sobrenome Sobrenome da pessoa
 * @param int $idade Idade da pessoa
 * @return string Saudação
 */
function parametrosNomeados(string $nome, string $sobrenome, int $idade): string
{
    return "Olá, $nome $sobrenome. Você tem $idade anos.";
}

/** 
 * Somador de números
 * @param float $n1 Primeiro número a ser somado
 * @param float $n2 Segundo número a ser somado
 * @return float Soma dos dois números
 */
function soma2(float $n1, float $n2): float
{
    return $n1 + $n2;
}

// somar2(1, $n2);

echo soma2(n2: 30, n1: 10);