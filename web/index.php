<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;
$app->register(new Silex\Provider\ServiceControllerServiceProvider());

foreach (new DirectoryIterator( __DIR__ . '/../src/Controllers') as $dir_item) {
    if($dir_item->isDot()) {
        continue;
    }
    if( !preg_match('/php$/', $dir_item->getFilename()) ) {
        continue;
    }
    if( !preg_match('/(.*)\.php$/', $dir_item->getFilename(), $match) ) {
        throw new \Exception("Could not preg match the filename: " . $dir_item->getFilename());
    }

    $class   = 'Controllers\\' . $match[1];
    $di_name = 'controller.' . strtolower($match[1]);

    $app[$di_name] = $app->share(function() use ($app, $class) {
        return new $class();
    });
}

require_once __DIR__.'/../config/routes.php';

$app->run();
