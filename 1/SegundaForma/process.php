<?php

$birth = filter_input(INPUT_POST, 'birth');
$currentYear = filter_input(INPUT_POST, 'currentYear');

$age = ($currentYear - $birth);

echo 'Su edad es: '.$age;

