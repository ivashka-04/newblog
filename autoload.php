<?php
function __autoload($class)
{
    if (file_exists(__DIR__ . '/controllers/'. $class. '.php'))
        require_once __DIR__ . '/controllers/'. $class. '.php';
}