<?php


if(isset($_GET["liczba"]) && is_numeric($_GET["liczba"])) {
    if( $_GET["liczba"] > 10){
            echo "liczba jest większa od 10";
        }  elseif( $_GET["liczba"] < 10){
            echo "liczba jest mniejsza od 10";
        }  elseif( $_GET["liczba"] = 10 ) {
            echo  "liczba jest równa 10";
         }   
}
else { 
    echo "to nie jest liczba";
}