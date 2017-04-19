<?php

    $a = isset($_GET["ano"])? $_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo "você nasceu em $a e tem $i anos <br>";

/*
    if ($i >= 18 ){
        $v = "já pode votar";
        $d = "já pode dirigir";
    } else{

        $v = "não pode votar";
        $d = "não pode dirigir";
    }

    echo "Com $i ano você $v e $d";

*/

    if ($i < 16 ){
        $tipoVoto  = "não vota ";
    } elseif (($i >=16 && $i < 18) || ($i > 65)) {
        $tipoVoto = "voto é opicional";
    } else{
        $tipoVoto = "Voto é Obrigatorio";
        }

    echo "Com $i ano de idade seu $tipoVoto";