<?php

$p = null;
if (isset($_GET["p"])){
    $p = $_GET["p"];
}
switch ($p){
    case "s1":
        echo "aktywny s1";
        break;
    case "s2":
        echo "aktywny s2";
        break;
    case "s3":
        echo "aktywny s3";
        break;
    default:
        echo "brak parametru p";
}
