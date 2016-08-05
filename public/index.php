<?php

define('LOCAL_DISK', dirname(__DIR__));

require __DIR__ . '/../vendor/autoload.php';

$app = new Monogen\App();
$app->start(new Monogen\Http\Request());