<?php
$my = $app['controllers_factory'];

$my->get('/', function() use ($app) {
    return $app['twig']->render('hello.html.twig', array(
        'name' => 'Mamamia',
    ));
    //return 'My controller content';
});

return $my;
