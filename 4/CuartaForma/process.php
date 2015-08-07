<?php

function gatherPOST($url) {
    return filter_input(INPUT_POST, $url);
}

function squareArea($param) {
    $area = $param * $param;
    return $area;
}

