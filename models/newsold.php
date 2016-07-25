<?php

require_once __DIR__.'/../classes/dbclass.php';

class news
    extends AbstractModel
{
    public $id;
    public $title;
    public $content;

    protected static $table = 'cinema';
    protected static $class = 'News';

    public function getTable()
    {
        return 'news';
    }

}


