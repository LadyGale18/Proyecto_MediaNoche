<?php

$numero = rand(0, 100);

if ($numero % 2 == 0) {
    echo 'El numero generado al azar(entre 0 y 100) '.$numero .' es par';
}  else {
    echo 'El numero generado al azar(entre 0 y 100) '.$numero .' es impar';
}
