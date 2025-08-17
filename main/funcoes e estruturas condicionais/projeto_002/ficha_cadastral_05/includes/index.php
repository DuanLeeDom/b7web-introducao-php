<?php
// Métodos de importação em PHP:
// Podem ser utilizados "include" ou "require".

// O uso de parênteses é permitido, mas não obrigatório.
include 'dados.php';
require('nao_existo.php');

/**
 * INCLUDE:
 * - Tenta incluir o arquivo especificado.
 * - Caso o arquivo não seja encontrado, gera um aviso (WARNING).
 * - O código continua sendo executado normalmente.
 * 
 * REQUIRE:
 * - Tenta incluir o arquivo especificado.
 * - Caso o arquivo não seja encontrado, gera um erro fatal (FATAL ERROR).
 * - A execução do código é interrompida.
 */
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World, eu sou <?= $nome ?></h1>
</body>
</html>
