<?php

function gatherPOST($var) {
    return filter_input(INPUT_POST, $var);
}

function calculateAge($currentYear,$birth) {
    $age = ($currentYear - $birth);
    return $age;
}
$age= calculateAge(gatherPOST('currentYear'), gatherPOST('birth'));

