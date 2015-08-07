<?php

define('base',filter_input(INPUT_POST, 'base'));
define('heigth',filter_input(INPUT_POST, 'height'));

$area = ((base * heigth)/2);