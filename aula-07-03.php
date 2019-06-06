
<h1>OLA> besta</h1>
<?php
 $valorDoComparacao ="Teste";
 $valorAReceber = $valorDoComparacao == "Teste" ? 10 : 0;

/* 
    operador ternario
    // variavel = compração ? valor_verdadeiro : valor_falso;
 
 */

echo $valorAReceber;


if ($valorDoComparacao == "Teste"){

    $valorAReceber= 10;
} else{
    $valorAReceber= 0;

}

 echo $valorAReceber;
 $if = 3;
 if ($if == 0)
    echo "<br>"."zero";
 elseif ($if == 1)
    echo "<br>um";
elseif ($if == 2)
    echo "<br>dois";
 else
    echo "<br>Sem valor previsto";


    $aluno = "João Paulo";
    $notaFinal = 9;

    if($notaFinal > 7)
        echo "<br>Parabens". " " . $aluno;

    if($notaFinal  >= 9 && $notaFinal < 10)
        echo "<br> Quase Perfeito". " ". $aluno. " "."Vamos Buscar o dez";
    else
        echo "<br> Vamos". " ".$aluno;


    if($notaFinal >= 7)
        echo "<br>Aprovado". " ".$aluno."<br>"." ".
         "Sua nota é"." ".$notaFinal;
    elseif ($notaFinal < 7 && $notaFinal >= 5)
        echo "<br>Recuperação". " ".$aluno."<br>"." ".
        "Sua nota é"." ".$notaFinal;
    else
        echo "<br>Reprovado"." ".$aluno."<br>"." ".
        "Sua nota é"." ".$notaFinal;

    // switch

    $notaFinal = 8;

    switch($notaFinal){
        case 9:
            echo "<br>Nove";
        break;

        case 7:
            echo "<br>sete";
            break;

        default:
            echo "<br>Valor não disponivel";
            break;
          }
          echo "<br>";
          //loops
        
           for($i = 0; $i < 5;$i++){
               echo $i . "<br>";

           }

           

           echo "<br>";
           for($i= 10; $i >= 0;$i--){
            $j=4;
            $result = $j * $i;
            echo $i ." * ". $j. " = ". $result. "<br>";

        }
        echo "<br>";
        // while
        $while = 5;
        while($while > 0){
            echo "Valor: $while"."<br>";
            $while--;

        }

        echo "<br>";

        // do while
        $varDoWhile = 3;

        do{

            echo "valor doWhile: $varDoWhile"."<br>";

            $varDoWhile--;
            

        }while($varDoWhile  >= 0);

        //array
        $cars = array("Volvo","BMW","Toyota");


        echo "<br>";

        foreach($cars as $key => $value){
            echo $key . " ". $value . "<br>";
        }
        
        for($k = 0; $k < count($cars);$k++){

            echo $k . " ". $cars[$k]. "<br>";


        }

 
?>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>