<?php
// REKURENCJA
// silnia rekurencyjnie
function silnia($n){
    if($n > 1){
        return (silnia($n-1)*$n); //wywołanie samej siebie
    } else {
        return 1; // warunek końcowy  
    }
}

// silnia iteracyjnie
function silnia1($n1){
    $w = 1;
    for($i = 1; $i <= $n1; $i++) {
        $w= $w * $i;   
    }
    return $w;
}
//Inkrementacja - Zwiększenie wartości Referencja - Przypisanie adresu w pamięci do zmiennej



