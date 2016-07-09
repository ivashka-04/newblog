<?php
/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 21.06.2016
 * Time: 11:30
 */
include __DIR__ . '/bd.php';



$stmt = $DBH->prepare("INSERT INTO cinema (title, content) 
                        VALUES(:title, :content)");
$stmt->bindParam(':title', $title);
$stmt->bindParam(':content', $content);


$title = strip_tags(trim($_POST['title']));
$content = strip_tags(trim($_POST['content']));
$stmt->execute();

header('Location: /newblog/all.php');
exit;

