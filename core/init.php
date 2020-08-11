<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config/config.inc.php';

require_once 'helpers/system_helper.php';
require_once 'helpers/format_helper.php';
require_once 'helpers/db_helper.php';

// function __autoload($classname)
// {
//     require_once 'libraries/' . $classname . '.php';
// }
function autoloader($className)
{
    $fileName = str_replace('\\', '/', $className) . '.php';

    $file = __DIR__ . '/../libraries/' . $fileName;

    include $file;
}

spl_autoload_register('autoloader');