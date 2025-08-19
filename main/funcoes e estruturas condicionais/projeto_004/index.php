<?php

function saudacao()
{
    return 'Olá, Mundo!';
}

function returnaNumero()
{
    return 3;
}

$x = returnaNumero() + 3;
var_dump($x);