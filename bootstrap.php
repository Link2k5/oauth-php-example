<?php

use Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

$dotEnv= Dotenv::create(__DIR__);
$dotEnv->load();
