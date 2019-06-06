<?php

/* 
include
include_once

require
require_once

*/

// chamada externa 
include "./functions/GlobalFunctions.php";

$texto = "teste";
$texto2 = "teste2";

//echo FormataMensagem($texto);
//echo FormataMensagem($texto2);



// criar dois arrays e faz o merge entre os arrays

$arrayUm = array("banana","maca");
$arrayDois = array("Uva","melao");
$arrayTres = array_merge($arrayUm,$arrayDois);

//  imprime as informaçoes do array e tipo de cada elemento

var_dump($arrayTres);

echo "<br>";

echo "total: ".count($arrayTres);

echo "<br><br>";
// ordena array em ordem crescente
$arrayDes = array("Uva","Jabuticaba","Maça");

print_r($arrayDes);
echo "<br>";
sort($arrayDes);
print_r($arrayDes);

echo "<br>";
rsort($arrayDes);
print_r($arrayDes);
echo "<br>";

$array1 = array(1,2);
$array2 = array(1,2);
$array3 = array("1","2");

if($array1 == $array2)
    echo "é igual"."<br>";

    if($array1 === $array2)
    echo "é identico<br>";

if($array2 != $array3)
    echo"arrays diferentes<br>";
    
if($array2 !== $array3)
    echo"arrays não são diferentes <br>";
    
    ImprimirValorFormatado($array2,2);

    ImprimirString("elias");

    ImprimirArray(array("elias","abner"));

    session_start();
    $_SESSION["idUsuario"]=10;
    echo $_SESSION["idUsuario"];

if($_SESSION["idUsuario"] > 0)
    echo "Voce ja esta logado";
else
    echo"Faça login";







?>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>