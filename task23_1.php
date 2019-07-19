<?php
session_start();
if(file_exists('sess.txt')){
    session_decode(file_get_contents("sess.txt"));
}


var_dump($_SESSION);