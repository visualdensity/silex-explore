<?php
$default = $app['controllers_factory'];

$default->get('/', function() use ($app) {
    return $app->redirect('/mylink');
});

return $default;
