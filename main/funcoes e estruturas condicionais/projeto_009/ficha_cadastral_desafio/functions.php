<?php

/**
 * Calcula o salario Anual baseado no salario mensal
 * @param float $salarioMensal Salário Mensal
 * @return float Salário Anual
 */
function calcularSalarioAnual(float $salarioMensal): string
{
    // 13º Salário, + 1/3 de férias
    $tercoDeFerias = $salarioMensal / 3;
    $salarioAnual = ($salarioMensal * 13) + $tercoDeFerias;
    return convertNumberToBRL($salarioAnual);
}

/**
 * Calcula a qunatidade de anos que falta para alguem se aposentar
 * @param int $idade Idade da pessoa
 * @param string $sexo Sexo da pessoa
 * @return int Quantidade de anos que falta para se aposentar
 */
function calcularFaltanteParaAposentadoria(int $idade, string $sexo)
{
    $anos_necessarios_para_aposentar = $sexo == 'M' ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;
    return $anos_necessarios_para_aposentar - $idade;
}

/**
 * Recebe um valor numerico e retorna um valor monetário
 * 
 * @param float $number Valor numérico
 * @return string Valor monetário
 */
function convertNumberToBRL(float $number): string
{
    return number_format($number, 2, ',', '.');
}

?>