<?php

use Illuminate\Support\Facades\Facade;

return [

    'name' => env('APP_NAME', 'Pearlcon Rail Services'),

    'env' => env('APP_ENV', 'production'),

    'debug' => (bool) env('APP_DEBUG', false),

    'url' => env('APP_URL', 'https://pearlconrail.co.uk'),

    'timezone' => 'UTC',

    'locale' => 'en',

    'fallback_locale' => 'en',

    'faker_locale' => 'en_GB',

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

];
