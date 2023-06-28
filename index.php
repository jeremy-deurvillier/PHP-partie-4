<?php

function simplyReturn() {
    return true;
}

function simplyParams($str) {
    return $str;
}

function simplyString($str1, $str2) {
    return $str1 . $str2;
}

function simplyNumber($numberOne, $numberTwo) {
    if ($numberOne === $numberTwo) return 'Les deux nombres sont identiques';

    return ($numberOne > $numberTwo)?'Le premier nombre est plus grand':'Le premier nombre est plus petit';
}

function concatMe($number, $str) {
    return "$number : $str";
}

function identify($age, $gender) {
    $genderTest = ($gender === 'Homme')?'un homme':'une femme';
    $ageTest = ($age >= 18)?'majeur':'mineur';

    return "Vous êtes $genderTest et vous êtes $ageTest";
}

function addition($nA = 1, $nB = 2, $nC = 3) {
    return $nA + $nB + $nC;
}

?>
