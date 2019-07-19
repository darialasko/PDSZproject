<?php

/*for ( $i = 0; $i < 10; $i ++ ) {
     echo $i. "<br/>";
 }
 
foreach ( $zmienna as $key => $value) {
var_dump( $key);
var_dump ($value);
}

$cond = true;
$x = 0;
while ( $cond) {
    print"a";
    if ($x >= 10){
    $cond = false;
    }
    $x++;
}

do while - przynajmniej raz wykonuje  */

$liczba = $_GET["liczba"];

if ($liczba <= 100){
    for ( $i = 0; $i < $liczba; $i ++){
       echo $i. "<br/>";
    } 

    $i = 0;
    while ($i){
      if ($i < $liczba){
         echo $i."<br/>";
     }
        $i ++;
    }

    $i = 0;
    do {
        echo $i."<br/>";
        $i ++;
    } while ( $i < $liczba);
} else {
    echo "liczba wieksza od 100";
    die();
}