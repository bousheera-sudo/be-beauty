<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$dbs = ['bouchra-baidouch8_laravel', 'bouchra-baidouch8_atelier-3'];
foreach ($dbs as $db) {
    try {
        $tables = DB::select("SHOW TABLES FROM `$db` ");
        file_put_contents($db.'_tables.json', json_encode($tables));
        
        // If there is an articles or produits table, dump some data
        foreach ($tables as $t) {
            $tableName = current((array)$t);
            if (strpos($tableName, 'article') !== false || strpos($tableName, 'produit') !== false) {
                $data = DB::select("SELECT * FROM `$db`.`$tableName` LIMIT 10");
                file_put_contents($db.'_'.$tableName.'_dump.json', json_encode($data));
            }
        }
    } catch (\Exception $e) {
        file_put_contents($db.'_error.txt', $e->getMessage());
    }
}
