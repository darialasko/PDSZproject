<?php
//$testFile = file_get_contents('test.txt');
define('PRODUCT', 'test.txt');

if(file_exists(PRODUCT)){
    // file pobiera wartość pliku i zwraca każdą linijkę jako tablicę
    $file = file(PRODUCT);
    
    foreach($file as $product){
        $item = explode(",", $product);
        echo "<p>";
        $netPrice = $item[2] + ($item[2]* 1.1);
        $grossPrice = $item[2]* $item[3];
        echo "Product {$item[0]}, net price: {$netPrice}, gross price: {$grossPrice}";
        echo "</p>";
    }
}

if(file_exists(PRODUCT)){
    file_put_contents(PRODUCT , 'text.txt');
} else {
    echo "Something went wrong";
}



/*
define( 'TEST_FILE', 'test.txt');
if(file_exists( TEST_FILE)){
    $data = file( TEST_FILE);
    
    foreach ( $data as $row){
        $item = explode(",",$row);
        echo "<p>";
        $netPrice = round( $item[2]);
        $grossPrice = round( $item[2]+ $item[2] * ( $item[3] / 100));
        echo "Product <b>{$item[0]}</b>, tax is: <b>{$item[3]}</b>.Gross is <b>{$grossPrice}</b> ";
        echo "</p>";
    } 
} else {
        echo "File doesn't exists";
    }
*/
