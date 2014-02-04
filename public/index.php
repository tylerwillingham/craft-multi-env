<?php

# Environment defined in .htaccess
define('CRAFT_ENVIRONMENT', $_SERVER['ENV']);

// Path to your craft/ folder
$craftPath = '../craft';

// Include the defined environment's config
require_once($craftPath . '/config/config.' . CRAFT_ENVIRONMENT . '.php');

// Do not edit below this line
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
    exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
