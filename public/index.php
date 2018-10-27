<?php

require_once '../vendor/autoload.php';

echo 'Hello World';

$database = new Medoo\Medoo([
'database_type' => 'sqlite',
'database_file' => '../storage/database.db'
]);

dump($database);