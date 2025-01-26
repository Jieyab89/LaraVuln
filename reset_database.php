<?php

use Illuminate\Support\Facades\Artisan;

// Boot Laravel application
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';

// Bootstrap Laravel Kernel
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// delete public file folder attachment and feeds 

function deleteDirectories() {
    $directories = [
        'public/attachment',
        'public/feeds-media'
    ];

    foreach ($directories as $dir) {
        if (is_dir($dir)) {
            echo "[INF] Deleting directory: $dir........ \n";
            deleteDirectory($dir);
            echo "[INF] Directory $dir deleted.\n";
        } else {
            echo "[-] Directory $dir does not exist.\n";
        }
    }
}

function deleteDirectory($dir) {
    $files = array_diff(scandir($dir), ['.', '..']);

    foreach ($files as $file) {
        $filePath = "$dir/$file";

        if (is_dir($filePath)) {
            deleteDirectory($filePath);
        } else {
            unlink($filePath);
        }
    }

    return rmdir($dir);
}

// create folder 

function createDirectories() {
    $directories = [
        'public/attachment',
        'public/feeds-media'
    ];

    foreach ($directories as $dir) {
        if (!is_dir($dir)) {
            echo "[INF] Creating directory: $dir........ \n";
            if (mkdir($dir, 0755, true)) { //chmod 755
                echo "[INF] Directory $dir created.\n";
            } else {
                echo "[INF] Failed to create directory: $dir\n";
            }
        } else {
            echo "[!] Directory $dir already exists.\n";
        }
    }
}

function clearCache() {
    echo "[INF] Clear cache........ \n";
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
}

function resetDatabase() {
    echo "[INF] Reseting Database........ \n";
    Artisan::call('migrate:fresh');
}

function runSeeder() {
    echo "[INF] Running seeder........ \n";
    Artisan::call('db:seed');
}

function confirmAction() {
    echo "[ACT] Are you sure want take this action? (y/n): ";
    $handle = fopen("php://stdin", "r");
    $confirmation = trim(fgets($handle));

    if (strtolower($confirmation) !== 'y') {
        echo "[!] Canceled by user :(.\n";
        exit;  
    }
}

confirmAction();
echo "======= LARAVULN ======= \n\n";
echo "[INF] Running all progress........ \n";
clearCache();
resetDatabase();
deleteDirectories(); 
createDirectories(); 
runSeeder();
echo "\n======= LARAVULN ======= \n";
echo "[SUCCESS] Finished, database & application success reset........ [OK]\n";