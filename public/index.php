<?php

define('LOCAL_DISK', dirname(__DIR__));

require __DIR__ . '/../vendor/autoload.php';

Monogen\Init::start(new Monogen\Http\Request);