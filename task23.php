<?php
session_start();

$_SESSION['name'] = 'Daria';
$_SESSION['number'] = 20;

session_encode();

file_put_contents("sess.txt", session_encode());
?>
