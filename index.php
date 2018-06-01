<?php 

require __DIR__ . '/vendor/autoload.php';

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use Jenssegers\Blade\Blade;

$router = new RouteCollector();
$blade = new Blade('views', 'cache');

include __DIR__ . '/router.php';

$dispatcher = new Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
echo $response;
