<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$request = Illuminate\Http\Request::create('/', 'GET');
$response = $kernel->handle($request);
echo "HTTP STATUS: " . $response->getStatusCode() . PHP_EOL;
echo "HTML LENGTH: " . strlen($response->getContent()) . " bytes" . PHP_EOL;
if ($response->getStatusCode() !== 200) {
    echo substr($response->getContent(), 0, 1000) . PHP_EOL;
}
