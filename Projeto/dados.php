<?php


    $nome = $_GET["nome"];
    $ano =  $_GET["ano"];
    $sexo = $_GET["sexo"];
    $idade  = date("Y") - $ano;
    echo "$nome é $sexo e tem $idade anos.";






/* Parte de baixo
$valor = $_GET["v"];
echo "  digitou tal valor $valor ";
$rq = sqrt($valor);
echo "<br> O valor da raiz quadrada de $valor é $rq";
*/

?>
<a href="index.html"> voltar</a>
