<?php
/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 21.06.2016
 * Time: 11:45
 */

include __DIR__ . '/bd.php';

$id = $_GET['id'];


$DBH->exec("DELETE FROM cinema WHERE id ='$id' ");

header('Location: /newblog/all.php');
exit;

