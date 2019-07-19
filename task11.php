<?php
$array = [];
for($i = 0; $i < 6; $i++){
    $array[] = "item {$i}";
}
print_r($array);
echo '<br>';

array_push($array, ' added ');
print_r($array);
echo '<br>';
array_pop($array);
print_r($array);
echo '<br>';
array_unshift($array, ' added ');
print_r($array);
echo '<br>';
array_shift($array);
print_r($array);
echo '<br>';

?>