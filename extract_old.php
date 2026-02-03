<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$tables = DB::select('SHOW TABLES FROM `bouchra-baidouch8_myshop`');
file_put_contents('myshop_tables.json', json_encode($tables));

$data = DB::select('SELECT * FROM `bouchra-baidouch8_myshop`.produits');
file_put_contents('old_produits.json', json_encode($data));
