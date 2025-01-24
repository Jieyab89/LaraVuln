<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

// Boot Laravel application
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class);

function clearCache() {
    echo "Clear cache...\n";
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
}

function resetDatabase() {
    echo "Reseting Database....\n";
    Artisan::call('migrate:fresh');
}

function runSeeder() {
    echo "Running seeder...\n";
    Artisan::call('db:seed');
}

function confirmAction() {
    echo "Are you sure want take this action? (y/n): ";
    $handle = fopen("php://stdin", "r");
    $confirmation = trim(fgets($handle));

    if (strtolower($confirmation) !== 'y') {
        echo "Canceled by user :(.\n";
        exit;  
    }
}

confirmAction();

echo "Running all progress...\n";

clearCache();

resetDatabase();

runSeeder();

echo "Finished, database success reset........ [OK]\n";
