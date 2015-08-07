<?php


function gatherPOST($param) {
$valor = filter_input(INPUT_POST, $param);
return $valor;
}

function absProcess($valor) {
    return abs($valor);
}
