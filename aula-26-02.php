<?php

//Variaveis

$_teste1 = "teste";
$_Teste1 = "teste c/ upper";

echo $_teste1." ".$_Teste1;

$string  ="contem um texto";
$inteiro = 110;
$float = 100.50;
$booleano = true;
$valorNull = null;


echo $string. "<br>";
 echo $inteiro. "<br>";
echo $float.  "<br>";
echo $booleano. "<br>";
echo $valorNull. "<br>";


$variavelGlobal = "global";

//funcao com paramnetros
function testeFuncao($argumento){


    $variavelInterma ="carro";
    echo $variavelInterma . " " .$argumento;
}
echo "<br>";
testeFuncao($variavelGlobal);
/* Variavel global se consegue pegar variaveis externas sem a variavel global o php
não consegue visualizar função externa uma outra maneira de contornar é passando um parametro*/

echo "<br>";
function testeFuncao2(){

    global $variavelGlobal;
    $variavelInterma ="carro";
    echo $variavelInterma . " " .$variavelGlobal;
}
testeFuncao2();

echo "<br>";

function testeFuncao3(){
    $variavelInterna ="carro";
    echo $variavelInterna. " ".$GLOBALS['variavelGlobal']."<br>";
}

testeFuncao3();


// variavel estatica (static)
function testeEstatica(){
    static $numero = 0;
    echo ++$numero . "<br>";
}
testeEstatica();
testeEstatica();
testeEstatica();

//echo vs print
$v1 = "texto1";
$v2 = "texto 2";

echo $v1,$v2."<br>";
print $v1."alguma coisa";

// Variavel recebendo nome com conteudo de outra variavel
$variavelConteudo = "Ola";
$$variavelConteudo = "mundo!";
echo $variavelConteudo . $Ola;

//saber varsao do php
echo "<br>";
echo PHP_VERSION;
echo "<br>";


//retorna o tamanho da string
$meuTexto = "meu texto";
echo strlen($meuTexto);

echo "<br>";
// retorna a quantidade de palavras(words) dentro da string
echo str_word_count($meuTexto);

echo "<br>";

// reverte o conteudo de uma string
echo strrev($meuTexto)."<br>";

//retorna a posicao do elemento da string
echo strpos ($meuTexto,"meu")."<br>";


// constantes - são globais

define("minhaConstante",12);

echo minhaConstante. "<br>";

define("constanteCase",8,true);
echo ConstanteCase ."<br>";

//operadores

$num1 = 10;
$num2 = 5;
$num3 =$num1 + $num2;

echo $num3."<br>";

$num3 = $num1 - $num2;

echo $num3."<br>";

$num3 = $num1 * $num2;
echo $num3."<br>";

$num3 = $num1 / $num2;
echo $num3."<br>";

$num3 = (($num1 +1 ) % $num2);
echo $num3."<br>";

$num3 = $num1 ** $num2;
echo $num3."<br>";

//calculando percentual
$valorProduto = 125.99;
$valorDesconto = 10;
$valorComDesconto = $valorProduto * $valorDesconto /100;
echo $valorComDesconto."<br>";

$valorComDesconto = $valorProduto * 0.10;
echo $valorComDesconto."<br>";

$valorComDesconto = $valorProduto * 0.90;
echo $valorComDesconto."<br>";

// operadores de atribuiçoes 
// = += -= *= /= %=

echo $num3."<br>";
$num3 = 0;
echo $num3."<br>";
$num3 =10;
echo $num3."<br>";
$num3 +=5;
echo $num3."<br>";
$num3 -=5;
echo $num3."<br>";


?>