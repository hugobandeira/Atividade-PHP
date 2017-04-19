<?php

    $i = isset($_POST["inicio"])? $_POST["inicio"]: "erro";
    $j = isset($_POST["fim"]) ? $_POST["fim"]: "erro";
    $c = isset($_POST["contador"])? $_POST["contador"]: "erro";

    //echo "$i $j $c<br>";

    while ($i < $j){
        echo "$i<br>";
        $i = $i + $c;
    }
