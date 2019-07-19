<?php
/*if(isset($_GET['A'])){
    $a = $_GET['A'];
}
if(isset($_GET['B'])){
    $b = $_GET['B'];
}

function divide($a, $b){
    $c = $a/$b;
    return $c;
} 
var_dump($a);
var_dump($b);
if($b !=0){
    echo divide($a/$b);
} else {
    echo 'Nie dziel przez zero';
}
*/


$a=null;
$b=null;

function divide($a,$b) {
   if($b != 0){
   $c = $a / $b;
   return $c;
   } else {
       echo "Nie dziel przez zero!";
   }
}
if (isset($_GET['a']) && isset($_GET['b'])) {
   $a= $_GET['a'];
   $b= $_GET['b'];
       echo divide($a,$b);

} else {
   echo "Brak zmiennych";
}

?>