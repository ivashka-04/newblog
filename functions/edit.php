<!doctipe html>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf8">
        <title>Обновление новости</title>
    </head>
    <body>

<?php
/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 21.06.2016
 * Time: 11:45
 */
include __DIR__.'/bd.php';
        
        $id= $_GET['id'];
       
$stmt = $DBH->query("SELECT * FROM cinema WHERE id='$id'");
$row = $stmt->fetch();

if (isset($_POST['save']))
{
    $title = strip_tags(trim($_POST['title']));
    $content = strip_tags(trim($_POST['content']));

    $stmt = $DBH->query("UPDATE  cinema 
    SET title = '$title', content = '$content'
    WHERE  id='$id'
    ");
    //$row = $stmt->fetch();
    header('Location: /newblog/all.php');
}
//else echo "Update ERROR!";
?>

<form method="post" 
              action="/newblog/functions/edit.php?id=<?php echo $row['id'] ?>"  enctype="multipart/form-data">
    <label>Название новости <br>
    <input type="text" name="title" value="<?php echo  $row['title'];?>" /></label> <br><br>

    TEXT <br>
    <textarea cols="40" rows="10" name="content"/><?php echo $row['content']; ?> </textarea>
    <br>
    <input type="submit" name="save" value="
    SAVE" />

</form>
  
</body>    
</html> 