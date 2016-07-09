<!doctipe html>
<html>
<head>
    <meta charset="utf8">
    <title></title>

<body>
<?php
include __DIR__.'/functions/bd.php';
//include __DIR__.'/functions/controlfun.php';
//$article = articles_get($DBH,$_GET['id']);
$id= $_GET['id'];

$stmt = $DBH->query("SELECT * FROM cinema WHERE id='$id'");
$row = $stmt->fetch();


echo  "<h1>".$row['title']."</h1>";
echo "<p>".$row['content'];?>




</body>
</html>