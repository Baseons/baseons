<?php declare(strict_types=1);

use Baseons\Kernel;

define('BASEONS_START', microtime(true));
define('DIRECTORY_BASE', dirname(__DIR__));

!file_exists(DIRECTORY_BASE . '/vendor/autoload.php') ? die('Autoload not found') : require DIRECTORY_BASE . '/vendor/autoload.php';

$kernel = new Kernel;

$kernel->run()->http();

$kernel->terminate();
