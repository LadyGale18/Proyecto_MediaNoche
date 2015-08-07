<?php

const currentYear = 2015;
const birth = 1996;

function calculateAge($currentYear,$birth) {
    $age = ($currentYear - $birth);
    return $age;
}

 $age= calculateAge(currentYear, birth);