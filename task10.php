<?php

// rfc normy dotyczace rozniych elementow, izo, csv
// wyrazenia regularne np wpisywanie daty, maila, model telefonu
// strlen()- zwraca dlugosc stringu
// strpos - zwraca pozycje pierwszego wystapienia szukanego znaku

$x = null;
$zdanie = "Ala ma kota";
if (isset($_GET["search"])){
    $x = $_GET["search"];
    if (strpos($zdanie, $x) !== false){
        echo strpos($zdanie, $x);
    } else {
        echo "nie ma litery z zdaniu";
    }
} else {
    echo "nie podales zmiennej";
}

//serializacja serialize/ unserialize
// array_push(); array_pop(); array_inshift(); array_shift()



