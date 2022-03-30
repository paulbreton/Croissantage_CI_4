<?php

namespace App\Config;

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 *
 */
class Eloquent
{

    function __construct()
    {
        $capsule = new Capsule;
        $db_config = config('Database');
        // // DBDriver
        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => $db_config->default['hostname'],
            'database' => $db_config->default['database'],
            'username' => $db_config->default['username'],
            'password' => $db_config->default['password'],
            'charset' => $db_config->default['charset'],
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}