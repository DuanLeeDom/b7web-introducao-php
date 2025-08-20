<?php
/**
 * Funções para retornar o dia da semana em texto
 * ----------------------------------------------
 * Ambas as funções recebem um número de 1 a 7
 * e retornam o nome do dia correspondente.
 * Caso o número esteja fora do intervalo (1-7),
 * retornam "Dia inválido".
 */

/**
 * Retorna o dia da semana usando if/elseif
 *
 * @param int $dia Número do dia (1 a 7)
 * @return string Nome do dia da semana
 */
function diaDaSemana(int $dia): string
{
    if ($dia == 1) {
        return 'Segunda-feira';
    } elseif ($dia == 2) {
        return 'Terça-feira';
    } elseif ($dia == 3) {
        return 'Quarta-feira';
    } elseif ($dia == 4) {
        return 'Quinta-feira';
    } elseif ($dia == 5) {
        return 'Sexta-feira';
    } elseif ($dia == 6) {
        return 'Sábado';
    } elseif ($dia == 7) {
        return 'Domingo';
    } else {
        return 'Dia inválido';
    }
}

/**
 * Retorna o dia da semana usando switch/case
 *
 * @param int $dia Número do dia (1 a 7)
 * @return string Nome do dia da semana
 */
function diaSemanaSwitch(int $dia): string
{
    switch ($dia) {
        case 1: return 'Segunda-feira';
        case 2: return 'Terça-feira';
        case 3: return 'Quarta-feira';
        case 4: return 'Quinta-feira';
        case 5: return 'Sexta-feira';
        case 6: return 'Sábado';
        case 7: return 'Domingo';
        default: return 'Dia inválido';
    }
}

// -------------------------------------------
// Exemplos de uso
// -------------------------------------------
echo 'Dia da semana (if/elseif): ' . diaDaSemana(7) . "<br/>";
echo 'Dia da semana (switch): ' . diaSemanaSwitch(5) . "<br/>";
echo 'Dia da semana (inválido): ' . diaSemanaSwitch(10) . "<br/>";
?>
