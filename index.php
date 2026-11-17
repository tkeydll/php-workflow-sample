<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
if (!$request->isMethod('GET')) {
    http_response_code(405);
    exit;
}

$name = $_GET['name'] ?? 'Guest';

// Deliberately unsafe: user input is rendered without HTML escaping.
echo '<h1>Hello, ' . $name . '</h1>';
