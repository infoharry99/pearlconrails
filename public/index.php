<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance check
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Check if vendor exists for standard Laravel execution
if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require __DIR__.'/../vendor/autoload.php';
    $app = require_once __DIR__.'/../bootstrap/app.php';

    $kernel = $app->make(Kernel::class);
    $response = $kernel->handle(
        $request = Request::capture()
    )->send();

    $kernel->terminate($request, $response);
} else {
    // Elegant standalone fallback: directly serve the static index.html
    if (file_exists(__DIR__.'/../index.html')) {
        require __DIR__.'/../index.html';
    } else {
        echo "Pearlcon Rail Services Ltd — Laravel Application Ready. Run 'composer install'.";
    }
}
