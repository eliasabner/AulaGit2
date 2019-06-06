<?php
    echo Date("d/m/Y");
    echo "<br>";

    // trim - remove espaços em branco da esquerda e direita
    $meuTexto = "    Senac    ";
    $formatacaoTrim = "teste ". trim($meuTexto);
    // conta tamanho da string
    echo strlen($formatacaoTrim);
    echo "<br>";

    // rtrim - remove espaços em branco da direita
    $formatacaoRTrim = "teste ". rtrim($meuTexto);
    // conta tamanho da string
    echo strlen($formatacaoRTrim);
    echo "<br>";

    // ltrim - remove espaços em branco da esquerda
    $formatacaoLTrim = "teste ". ltrim($meuTexto);
    // conta tamanho da string
    echo strlen($formatacaoLTrim);
    echo "<br>";

    $texto = "";
    // verifica se a variável é vazio
    if (empty($texto)) {
      echo "Campo vazio!";
    }

    echo "<br>";

    $texto_null = null;
    // verifica se a variável é null
    if (is_null($texto_null)) {
        echo "Campo null!";
    }

    echo "<br>";

    $var = "";
    // verifica se a variável foi iniciada
    if (isset($var))
      echo "Variável iniciada.";

    echo "<br>";

// is_bool() - Verifica se a variável é um boleano
// is_float() - Informa se a variável é do tipo float
// is_int() - Informa se a variável é do tipo inteiro
// is_string() - Informa se a variável é do tipo string
// is_array() - Verifica se a variável é um array

// md5
// sha1
// criptografia hash
$senha = "Test123!";
echo $senha."<br>";
echo md5($senha)."<br>";

$senha = "Test123!";
echo $senha."<br>";
echo sha1($senha)."<br>";

// base64_encode
$string = "meu teste";
echo "$string<br>";
$encode = base64_encode($string);
echo "$encode<br>";

// base64_decode
echo base64_decode($encode). "<br>";

// implode - transforma elementos do array em uma única string
// separando os valores conforme delimitador informado
$array = array('João', 'Paulo', 'jp@teste.com');
$arrayEmString = implode(",", $array);
echo "$arrayEmString<br>";

// explode - tranforma valores de uma string em um array
$stringEmArray = explode(",", $arrayEmString);
print_r($stringEmArray);
echo "<br>";

// criar uma variável com o nome de um arquivo contendo
// a extensão, e recuperar apenas a extensão do arquivo
// informado na variável
$imagemPerfil = "foto_na_praia.psd";
$arrayImagemPerfil = explode(".", $imagemPerfil);

if ($arrayImagemPerfil[1] != "psd")
  echo "Imagem atualizada!";
else
  echo "A extensão $arrayImagemPerfil[1] não é permitida!";

echo "<br>";

// substr - extrai posições de uma string
$substr = "EQL-7800";
echo substr($substr, 0, 3);
echo "<br>";
echo substr($substr, 4); 
echo "<br>";
echo substr($substr, -2);

?>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>