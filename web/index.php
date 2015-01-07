<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/routes.php';

$app = new Silex\Application();
$app['debug'] = true;
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../src/Views',
));

foreach($routes as $route => $controller) {
    $app->mount($route, include __DIR__ . "/../src/Controllers/${controller}.php");
}

$app->run();
