<?php

$storagePath = '/tmp/storage';

$directories = [
    $storagePath,
    $storagePath . '/app',
    $storagePath . '/framework',
    $storagePath . '/framework/cache',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/testing',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
];

foreach ($directories as $directory) {
    if (! is_dir($directory)) {
        mkdir($directory, 0777, true);
    }
}

putenv('APP_STORAGE_PATH=' . $storagePath);
$_ENV['APP_STORAGE_PATH'] = $storagePath;
$_SERVER['APP_STORAGE_PATH'] = $storagePath;

putenv('VIEW_COMPILED_PATH=' . $storagePath . '/framework/views');
$_ENV['VIEW_COMPILED_PATH'] = $storagePath . '/framework/views';
$_SERVER['VIEW_COMPILED_PATH'] = $storagePath . '/framework/views';

require __DIR__ . '/../public/index.php';