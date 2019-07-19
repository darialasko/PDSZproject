<?php
define( 'TEST_FILE', test.txt);
if(file_exists( TEST_FILE)){
    echo file( TEST_FILE);
} else {
    echo 'Nie ma pliku';
}
