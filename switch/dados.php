<?php
$d = isset($_GET["dss"])? $_GET["dss"]:0;
    switch ($d) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Levanta e vai estudar! :D";
            break;
        case 7:
        case 8:
            echo "descase, pequeno garfanhoto! :D";
            break;
        default:
            echo "Dia da semanna invalido! :/";
    }
    ?>