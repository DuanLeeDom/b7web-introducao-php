<?php

// AQUI TERA UM TREINO DE ENTENDIMENTO DE OPERADOR TERNARIO

// 1. Verificação de idade se é maior de idade ou é menor de idade

$idade = 18;

echo $idade >= 18 ? 'Você é maior de idade' : 'Você é menor de idade';

echo '<br/>';

// 2. Faça um parametro de indentificação quando de renda é bom ou ruim.

$salario = 5600.00;

echo $salario < 2500 ? 'Seu salário de R$ ' . number_format($salario, 2, ',', '.') . ' é ruim' : 'Seu salário de R$ ' . number_format($salario, 2, ',', '.') . ' é Bom';

echo '<br/>';

// 3. Verificar de par ou ímpar
$number = 10;
$number_ind = $number % 2 == 0 ? 'par' : 'ímpar';
echo "Número fornecido foi $number e ele é $number_ind";


echo '<br/>';
// 4. Verificar se um aluno passou por conta de sua nota, se essa nota for acima de 7 é aprovado se for menor que 7 reprovado.

$nota1 = 5;
$nota2 = 5;
$med = (($nota1 + $nota2) / 2);
$res = $med >= 7 ? 'Aprovado' : 'Reprovado';
echo "O resultado da sua nota 1 e 2 foram: <br/>Nota 1: $nota1<br/>Nota 2: $nota2<br/>Média: $med<br/> Você ficou $res";


echo '<br/>';
// 5. Sistema de login simples

$user = 'admin';
$password = '1234';
echo $user == 'admin' && $password == '1234' ? 'Acesso concedido!' : 'Acesso negado!';

?>