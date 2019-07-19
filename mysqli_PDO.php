<?php

//$mysqli = new mysqli('localhost', 'debian-sys-maint', 'tPyJZdf5ivQjeE1L', 'bai');

//public PDO::__construct(string$dsn[,string$username[,string$password[,$options]]])


$dsn = 'mysql:dbname=bai;host=localhost';
$pdo = new PDO($dsn, 'debian-sys-maint', 'tPyJZdf5ivQjeE1L');

var_dump($pdo);

$msql = new mysqli('localhost', 'debian-sys-maint', 'tPyJZdf5ivQjeE1L', 'bai');

var_dump($msql);


//SQL INJECTION
