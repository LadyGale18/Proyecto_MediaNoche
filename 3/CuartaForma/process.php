<?php

        const PI = 3.14;

function gatherPOST($input) {
    return filter_input(INPUT_POST, $input);
}

function circleArea($radio) {

    $area = PI * pow($radio, 2);
    return $area;
}
