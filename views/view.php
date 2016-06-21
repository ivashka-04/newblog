<?php
include __DIR__.'/../functions/bd.php';


$stmt = $pdo->query('SELECT * FROM cinema ORDER BY data ASC');
while ($row = $stmt->fetch())
{
    echo $row['title'] . "\n";
    echo $row['content'] . "\n";
    echo $row['genre'] . "\n";
    echo $row['data'] . "\n";
    echo $row['img'] . "\n";
}
?>