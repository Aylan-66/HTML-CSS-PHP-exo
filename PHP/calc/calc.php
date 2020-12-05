<?php
$argument1 = readline('Entrez le premier argument ');
$operateur = readline('Entrez un operateur ');
$argument2 = readline('Entrez le deuxieme argument ');

    if ($opérateur === '*') {
        $result = $argument1 * $argument2;
        echo $result;
    } else if ($opérateur === '/') {
        if ($argument2 === 0) {
            echo "error";
        } else {
            $result = $argument1 / $argument2;
            echo $result;
        }
        
    } else if ($opérateur === '+') {
        $result = $argument1 + $argument2;
            echo $result;
    } else if ($opérateur === '-') {
        $result = $argument1 - $argument2;
        echo $result;
    } else if ($opérateur === '%') {
        $result = $argument1 % $argument2;
        echo $result;
    }
echo "\n";
?>
