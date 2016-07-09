<?php
require __DIR__.'/../models/news.php';

class NewsController
{
    public  function actionAll()
    {



        $items = news::getAll();
        include __DIR__.'/../views/news/all.php';
    }

    public function actionOne()
    {

        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__.'/../views/news/one.php';
    }
}