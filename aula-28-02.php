<?php 

// operadores de atribuição

$numero = 0;
echo $numero . "<br>";
$numero = 2;
echo $numero . "<br>";
$numero = 3;
echo $numero . "<br>";

// mais igual (+=)

$numero = $numero +3; 
echo $numero . "<br>";
$numero += 3;
echo $numero . "<br>";

//menos 

$numero = $numero -3;
echo $numero."<br>";
 //façam o menos igual (-=)
 
 $numero -= 3;
 echo $numero."<br>";

 // divisao
 $numero = $numero / 3;
 echo $numero."<br>";

 // novo valor de numero 6

 $numero = 6;
 $numero /= 3;
 echo $numero."<br>";

 //multiplicacao (*=) valor 2

 $numero *= 2;
 echo $numero."<br>";

 // somando o var numero com + 1
$numero += 1;
echo $numero."<br>";

 //usando mod
 $numero %=2;
 echo $numero."<br>";

echo "Operadores de comparação <br><br>";
 // operadores de comparação

 $variavel ="casa";

 if($variavel == "casa")
        echo "é igual a casa<br>";
 

        $variavel = 0;
if($variavel ==="0")
echo "é igual a 0<br><br>";


echo " exercicio usando (<> e !=) <br><br>";

// usando =!

echo "valor da variave é !=l "."<br>";
if($variavel != 1)
echo "variavel é diferente de 1<br><br>";

// usando <>
echo "valor da variave é <> l "."<br>";
if($variavel <> 1)
echo "variavel é diferente de 1<br><br>";

//0 !==

if($variavel !== "0")
    echo "variavel é diferente de 0 ou tipo<br><br>";

// variavel é maior que menos -1

    echo "valor da variavel = ".$variavel."<br>";

if($variavel  > -1)
    echo "variavel é maior que -1<br><br>";

    echo "valor da variavel = ".$variavel."<br>";

if($variavel < 1)
    echo "variavel é menor que 1<br><br>";



    // >= 1

echo "valor da variavel = ".$variavel."<br>";
if($variavel >=  -1)
    echo "variavel é maior ou igual -1<br><br>";
// > 1
echo "valor da variavel = ".$variavel."<br>";

if($variavel > -1)
    echo "variavel é maior que -1<br><br>";

// 1 <= 

echo "valor da variavel = ".$variavel."<br>";
if($variavel <= 1)
    echo "variavel é menor ou igual 1<br><br>";
// 1 <
echo "valor da variavel = ".$variavel."<br>";

if($variavel < 1)
    echo "variavel é menor que 1<br><br>";

// increment (++) decremento (--)

$variavel++;
echo $variavel."<br><br>";

$variavel--;
echo $variavel."<br><br>";

echo ++$variavel."<br><br>";

echo --$variavel."<br><br>";

$variavel = 11;
$variavel--;
echo $variavel."<br><br>";
$variavel++;
$variavel++;
echo $variavel."<br><br>";

echo "test"."<br>";

// operadores logicos
// and or / && ||

$variavelDois = 5;

if($variavel == 12 && $variavelDois == 5)
    echo "todas as condiçoes atendidos"."<br>";

    if($variavel == 12 and $variavelDois == 5)
    echo "todas as condiçoes atendidos";

    if($variavel == 11 or $variavelDois == 5)
    echo "uma das  condiçoes atendidos"."<br>";

    if($variavel == 11 || $variavelDois == 5)
    echo "uma das  condiçoes atendidos"."<br>";

    // operador de negação
    $boleana = false;

    if (!$boleana)
    echo "é verdade"."<br>";

    else
        echo "Nã é vardade"."<br>";

        // xor um ou outro
        $sexo = "M";

        if($sexo == "M" xor $sexo == "F")
            echo "Esta correto"."<br>";

        else
            echo "Negado"."<br>";

            // concatenação

            $nome ="joao";
            $sobrenome = "Paulo";
                echo $nome." ".$sobrenome."<br>";


                $a = "a";
                $b = "b";
                $c = "";
                $c .= $a;
                $c .=$b;

                echo $c."<br>";



           // operador ternario
           // <comparacao> ? <valor_se_verdadeiro> : <valor_se _falso>
           $descricaoSexo = $sexo == "M" ? "Masculino" : "Feminino";
           echo $descricaoSexo."<br>";



?>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

