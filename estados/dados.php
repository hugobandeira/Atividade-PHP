<?php
   //$e = isset($_POST["estados"]) ? $_POST["estados"]: "não armazenado";
    $e = isset($_GET["estados"])? $_GET["estados"]: "nada armazenado";
    //$e = $_REQUEST["estados"];

   //echo "o que está armazenado antes do shitch  $e <br>";

    switch ($e) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
            echo "REGIÃO NORTE";
            break;

        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
        case 13:
        case 14:
        case 15:
        case 16:
            echo "REGIÃO NORDESTE";
            break;

        case 17:
        case 18:
        case 19:
            echo "REGIÃO CENTRO OESTE";
            break;

        case 20:
        case 21:
        case 22:
        case 23:
            echo "REGIÃO SULDESTE";
            break;

        case 24:
        case 25:
        case 26:
            echo "REGIÃO SUL";
            break;

        default:
        echo "NÃO EXISTE ESSA REIGÃO";

    }
    ?>
<a href="http://127.0.0.1:8080/estados/index.php"><br><br>Voltar</a>
