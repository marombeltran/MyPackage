<?php

require __DIR__ . '/../vendor/autoload.php';

echo '<h1>Index page</h1>';

use Marom\Package\MyLogger;

echo MyLogger::load('Hello, world');
