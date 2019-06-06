<?php

    // funçoes de string
    $meuTexto = "TESt String";

    // converte  texto para maiusculo
    echo strtoupper($meuTexto)."<br>";

    // converte texto para minusculo
    echo strtolower($meuTexto)."<br>";

    // funções
    function MinhaFuncao() {

        echo "minha função" . "<br>";
    }
    MinhaFuncao();


    //Funcao com argumento/parametro
    function FuncaoComArgumento($argumento,$parametro = null) {
        if($argumento == 10)
            echo "Parabens pela nota" . "<br>";
     
        if($parametro != null && $parametro<= 25)

            echo "Parabens voce não ultrapassou o limite de faltas" . "<br>";
        else
            echo "Infelizmente você foi reprovado por falta" . "<br>";

            echo "Nota processada!" . "<br>";    
    }
    FuncaoComArgumento(9);
    FuncaoComArgumento(10);
    FuncaoComArgumento(8 ,25);

// funçao com parametro opcional

function ParametroOpcional($argumento = 0){
    echo "Valor do argumento: $argumento  <br>";

}

ParametroOpcional();
ParametroOpcional(1);

//funcao com prganizaçao do parametro

function OrdenaParametro($primeiro, $segundo = 0){

    echo "$primeiro | $segundo <br>";
    echo '$primeiro | $segundo <br>';

}

OrdenaParametro(1);
OrdenaParametro(2);

// função com retorno

function FuncaoComRetorno(){

    return "Olá<br>";
}


echo FuncaoComRetorno();

$variavel = FuncaoComRetorno();
echo $variavel;

// funao com retorno de valor com parametro
// trim remove os espaços da direita e da esquerda
function FuncaoComEParametro($SiglaEstado) {

    $siglaEstadoParametro = trim(strtoupper($SiglaEstado));
    $retorno ="";
    if($siglaEstadoParametro == "SP")
        $retorno = "São Paulo";
    elseif($siglaEstadoParametro == "RJ")
        $retorno ="Rio de Janeiro";
    elseif($siglaEstadoParametro == "MG")
        $retorno = "Minas Gearais";
    else
        $retorno = "Sigla não esperada!";

    return "$retorno <br>";
}

$retornoEstado = FuncaoComEParametro("MG");
echo $retornoEstado;

echo FuncaoComEParametro("RJ");
echo FuncaoComEParametro("SP");
echo FuncaoComEParametro("RN");
echo FuncaoComEParametro(" sp ");


/* 
    criar uma função recebendo um parametrp de nome outro 
    parametrp de sobrenome retornar nome cocatenado
*/

function NomeCompleto($nome,$sobrenome){

   // $trataNome = strtoupper($nome,$sobrenome);

    return "$nome $sobrenome"; 


}

$teste = NomeCompleto("elias","abner");

echo $teste;


?>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>