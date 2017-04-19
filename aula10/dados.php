<?php

 $n = ($_GET["num"])? $_GET["num"]: 0;
 $a = ($_GET["oper"])? $_GET["oper"]: 1;

 switch ($a){
     case 1:
         $r = $n * 2;
         break;

     case 2:
         $r = $n ^ 3;
         break;

     case 3:
         $r = sqrt($n);

 }
 echo " o resultado da operação solicitada foi $r";
 ?><br>

<a href="index.html">Voltar</a>
