<?php

$storagePath = '/tmp/storage';
$bootstrapCachePath = '/tmp/bootstrap/cache';

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

    $bootstrapCachePath,
];

foreach ($directories as $directory) {
    if (! is_dir($directory)) {
        mkdir($directory, 0777, true);
    }
}

/**
 * Laravel storage path
 */
putenv('APP_STORAGE_PATH=' . $storagePath);
$_ENV['APP_STORAGE_PATH'] = $storagePath;
$_SERVER['APP_STORAGE_PATH'] = $storagePath;

/**
 * Laravel compiled views path
 */
putenv('VIEW_COMPILED_PATH=' . $storagePath . '/framework/views');
$_ENV['VIEW_COMPILED_PATH'] = $storagePath . '/framework/views';
$_SERVER['VIEW_COMPILED_PATH'] = $storagePath . '/framework/views';

/**
 * Laravel bootstrap/cache paths
 */
$cacheEnv = [
    'APP_CONFIG_CACHE' => $bootstrapCachePath . '/config.php',
    'APP_EVENTS_CACHE' => $bootstrapCachePath . '/events.php',
    'APP_PACKAGES_CACHE' => $bootstrapCachePath . '/packages.php',
    'APP_ROUTES_CACHE' => $bootstrapCachePath . '/routes.php',
    'APP_SERVICES_CACHE' => $bootstrapCachePath . '/services.php',
];

foreach ($cacheEnv as $key => $value) {
    putenv($key . '=' . $value);
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
}

require __DIR__ . '/../public/index.php';