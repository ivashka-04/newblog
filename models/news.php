<?php

/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 09.07.2016
 * Time: 11:45
 */
require_once __DIR__.'/../classes/dbclass.php';

class news
{
    public $id;
    public $title;
    public $content;

   public static function getAll()
    {
        $db = new dbclass;
        return $db->queryAll('SELECT * FROM cinema', 'news');
    }
    public static function getOne($id)
    {
        $db= new dbclass();
        return $db->queryOne('SELECT * FROM cinema WHERE id='.$id, 'News');

        
    }
}