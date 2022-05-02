<?php
/*
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;
*/
require_once 'configuration/config.php';
require_once 'lib/vendor/autoload.php';

spl_autoload_register('autoloadClass'); 

function autoloadClass($className)
{
    $dirs = ['controller', 'model'];
    $found = false;
    foreach ($dirs as $dir) {
        $fileName = __DIR__ . '/' . $dir . '/' . $className . '.class.php';
        
        if (is_file($fileName)) {
            require_once($fileName);
            $found = true;
        }
    }
    if (!$found) {
        throw new Exception('Загрузка не удалась ' . $className);
    }
    return true;
}