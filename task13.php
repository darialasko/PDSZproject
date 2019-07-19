<?php
$znak = null;
$liczba1 = null;
$liczba2 = null;

if (isset($_GET['liczba1']) && isset($_GET['liczba2']) && isset($_GET['znak'])) {
    $liczba1= $_GET['liczba1'];
    $liczba2= $_GET['liczba2'];
    $znak = $_GET['znak'];
} else {
    $liczba1= 10;
    $liczba2= 2;
    $znak= 'divide';
}

function addition($liczba1, $liczba2){
     return $liczba1+$liczba2;
 }

function substraction($liczba1, $liczba2){
    return $liczba1-$liczba2;
}

function multiplaction($liczba1, $liczba2){
    return $liczba1*$liczba2;
}

function divide($liczba1, $liczba2){
    if($liczba2 != 0){
        return $liczba1/$liczba2;
    } else {
        echo 'Nie dziel przez zero';
    }
}

switch($znak){
    case 'addition':
   
    echo addition($liczba1, $liczba2);
    break;
    case 'substraction':
    echo substraction($liczba1, $liczba2);
    break;
    case 'multiplaction':
    echo multiplaction($liczba1, $liczba2);
    break;
    case 'divide':
    echo divide($liczba1, $liczba2 );
    break;
}
