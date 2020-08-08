<?php
session_start();

require_once 'config/config.inc.php';

require_once 'helpers/system_helper.php';
require_once 'helpers/format_helper.php';
require_once 'helpers/db_helper.php';

function __autoload($classname)
{
    require_once 'libraries/' . $classname . '.php';
}
