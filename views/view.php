<!doctipe html>
<html>
    <head>
        <meta charset="utf8">
        <title></title>

    <body>
<?php
//require __DIR__ . '/../classes/controlfun.php';
include __DIR__ . '/../functions/bd.php';
//$DBH = new DB;


$stmt = $DBH->query('SELECT * FROM cinema ORDER BY id ');
while ($row = $stmt->fetch())
{?>
    <h1>
        <a href="viewarticle.php?id=<?=$row['id']?>">
        <?php echo $row['title'] . "\n";?> </h1> </a>
        <p><?php echo $row['content'] . "\n";?> </p>
        <a href="/newblog/functions/edit.php?id=<?php echo $row['id']?>">Редактировать запись</a><br />
        <a href="/newblog/functions/delete.php?id=<?php echo $row['id']?>">Удалить запись</a><br />
<?php }
?>

              </body>
</html>