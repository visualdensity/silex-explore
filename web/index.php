<?php
require_once __DIR__.'/../vendor/autoload.php';

use Demo\Controller\MyController as MyController;

$app = new Silex\Application();

$app['debug'] = true;
$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app['my.controller'] = $app->share(function() use ($app) {
        return new MyController();
});

$app->get('/mylink', "my.controller:indexAction");

$app->run();
