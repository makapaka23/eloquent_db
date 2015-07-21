<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require_once 'vendor/autoload.php';

$capsule = new Capsule();

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => 'localhost',
	'database' => 'eloquent',
	'username' => '',
	'password' => '',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => ''
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();