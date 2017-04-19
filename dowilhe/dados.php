<?php

    $numero = isset($_POST["numero"])? $_POST["numero"]: "não entrou nenhum valor";
    $c = 1;
    $r = 1;
    do{
        echo "<br> mutiplicação de $numero X $c: ";
        $r = $numero* $c;
        echo $r;
        $c++;

    }while($c <=10);
    ?>
<a href="index.php"><br>Voltar</a>
