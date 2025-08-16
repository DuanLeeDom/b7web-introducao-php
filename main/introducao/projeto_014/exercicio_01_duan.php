<?php
    /**
     * Crie um script PHP que simula um sistema de login simples.
     * Se ambos estiverem corretos, exiba uma mensagem de boas-vindas.
     * Se o nome do usuário estiver correto, mas a senha estiver errada, exiba uma mensagem de erro de senha.
     * Se o nome do usuário estiver incorreto, exiba uma mensagem de erro de nome de usuário.
     */

    // $usuarioCorreto = 'admin';
    // $senhaCorreta = '123456';

    // $usuario = 'admin';
    // $senha = '123456';

    // if (($usuarioCorreto == $usuario) && ($senhaCorreta == $senha)) {
    //     echo 'Bem vindo(a)!';
    // } elseif (($usuarioCorreto == $usuario) && ($senhaCorreta != $senha)) {
    //     echo 'Erro: senha incorreta.';
    // } elseif (($usuarioCorreto != $usuario) && ($senhaCorreta == $senha)) {
    //     echo 'Erro: nome de usuário.';
    // } elseif (($usuarioCorreto != $usuario) && ($usuarioCorreto != $senha)) {
    //     echo 'informaçãos não validas.';
    // }

    /**
     * Exercício 02
     * Crie um script PHP que verifica se uma pessoa pode entrar em uma festa.
     * Para entrar na festa, a pessoa precisa ter pelo menos 18 anos ou estar acompanhada por um responsável.
     */

    // $idade = 18;
    // $acompanhadoResponsavel = true;

    // if ($idade >= 18 || $acompanhadoResponsavel == true) {
    //     echo 'Pode entrar na festa!';
    // } elseif ($idade < 18 && $acompanhadoResponsavel == false) {
    //     echo 'Negado: Você não pode entrar na festa você não está com um responsavel.';
    // } elseif ($idade < 18) {
    //     echo 'Negado: Você não pode entrar na festa você é menor de idade';
    // } else {
    //     echo 'Negado: Você não pode entrar na festa.';
    // }

    /**
     * Exercício 03
     * Crie um script PHP que determina se um cliente tem direito a um desconto especial em uma loja e qual será o desconto.
     * O cliente tem direito ao desconto de 20% se o valor total de suas compras for maior que R$ 200 ou se ele for um membro VIP da loja.
     * Se o valor total das compras estiverem entre R$ 150 e R$ 200, o cliente pode receber um desconto de 10%. 
     */

    $valorCompra = 185;
    $vip = false;

    if ($valorCompra >= 200 || $vip == true) {
        $valorCompraDesconto = ($valorCompra - ($valorCompra * (20/100)));
        echo "Você recebeu um desconto de 20% de uma compra de R$ $valorCompra";
        echo "<br/>Valor de compra atual: R$ $valorCompraDesconto";   
    } elseif ($valorCompra >= 150 && $valorCompra < 200 && !$vip) {
        $valorCompraDesconto = ($valorCompra - ($valorCompra * (10/100)));
        echo "Você recebeu um desconto de 10% de uma compra de R$ $valorCompra";
        echo "<br/>Valor de compra atual: R$ $valorCompraDesconto";
    } else {
        echo "Valor de compra atual: R$ $valorCompra";
    }
    


?>