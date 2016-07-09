<!doctipe html>
<html>
<head>
    <meta charset="utf8">
    <title>New Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

<?php
require_once  __DIR__.'/autoload.php';
//include __DIR__.'/views/view.php';
//require __DIR__.'/controllers/NewsController.php';
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl']: 'News';
$act = isset($_GET['act']) ? $_GET['act']: 'All';

$controllerClassName = $ctrl. 'controller';
//require_once __DIR__.'/controllers/'. $controllerClassName.'.php';
$controller = new $controllerClassName();
$method = 'action'. $act;
$controller->$method();

?>

<br><br>
<a href="/newblog/views/form.html">Добавить статью</a>

</body>
</html>