<?php
$default = $app['controllers_factory'];

$default->get('/', function() use ($app) {
    return $app['twig']->render('Default/index.html.twig', array(
        'name' => 'Mamamia',
    ));

});

return $default;
