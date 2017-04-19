<?php
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];

    $media = (($n1 + $n2)/2);

    if ($media < 5){
        echo "a media entre $n1 e $n2 é igual a $media <br>";
        echo "Sutuação do aluno é: REPROVADO";
    }elseif ($media > 5 && $media <7){
        echo "a media entre $n1 e $n2 é igual a $media <br>";
        echo "Sutuação do aluno é: REPERAÇÃO";
    } elseif ($media >= 7){
        echo "a media entre $n1 e $n2 é igual a $media <br>";
        echo "Sutuação do aluno é: APROVADO";
    }
?>

 <a href="index.html"> <br>Voltar</a>
