<?php

function gatherPOST($input) {
    return filter_input(INPUT_POST, $input);
}
function calculateArea($base,$height) {
    $area = ($base*$height)/2;
    return $area;      
}
