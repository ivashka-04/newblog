<?php


$user ='mybd_user';
$pass = '1234';

$dsn = "mysql:host=localhost;dbname=test;charset=utf8";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$DBH = new PDO($dsn, $user, $pass, $opt);


?>