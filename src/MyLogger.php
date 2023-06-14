<?php

namespace Marom\Package;

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

abstract class MyLogger {

    public static function load(string $str): string 
    {
        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('app.log', Level::Warning));

        // add records to the log
        $log->warning($str);
        $log->error($str);

        return "Line added to app.log -> $str";
    }
}


