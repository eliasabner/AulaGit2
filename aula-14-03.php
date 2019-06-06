<?php

$soma = recebe(20,1);
echo $soma . "<br>";

$alerta = recebeNomeIdadeSexo("elias","masc",17);
echo $alerta;

function recebe($x,$y){
    $soma = $x + $y;

    if($soma > 15)
        $soma += 2;
    else
        $soma +=5;

    return $soma;

}

    function recebeNomeIdadeSexo($nome,$sexo,$idade){
        $mensagem = $idade > 18 ? "Acesso Liberado" :"negado idade menor que a permitida";
        /*
        if($idade > 18)
            $texto = "$nome Acesso Liberado" ;
        else
            $texto ="$nome Acesso negado idade menor que a permitida";
        */

        
                return strtoupper("$nome, $mensagem"). "<br>"; 

    }

    date_default_timezone_set('America/Sao_Paulo');
    $hoje = date("d/m/Y H:i:sa");
    echo $hoje;
    
    //array

    $array = array("banana","maça");
    $array2 = array(1 =>"banana ", 2=>"maça");
    $array3 = array("M" =>"Masculino","F" =>"Feminino");

   echo "<br>";
    foreach($array as $key => $value){
        echo $key . " ". $value . "<br>";
       
    }
 
    print_r($array);
    
    echo "<br>";
    
    foreach($array2 as $key => $value){
        echo $key . " ". $value . "<br>";
    }
   
    print_r($array2);
    echo "<br>";
    
    foreach($array3 as $key => $value){
        echo $key . " ". $value . "<br>";
    }

    echo "<br>";
    print_r($array3);

    //array multimensiona

    //simulçao jogo da velha
    echo "<br>";
    echo "<br>";
    $jogo = array(
        array("x", "", "x"),
        array("", "O", ""),
        array("O" ,"", "x")
    ); 
    echo "<br>";
print_r($jogo);

$arrayUm = array("banana","maca");
$arrayDois = array("Uva","melao");
$arraytres = $arrayUm + $arrayDois;

echo "<br>";
echo "<br>";

print_r($arraytres);




?>
<table border="1">
<?php

    foreach($jogo as $key =>$value){
        echo "<tr>";
    foreach($value as $key => $value)
    echo"<td>$value</td>";
    }
    echo "</tr>";
?>
</table>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>