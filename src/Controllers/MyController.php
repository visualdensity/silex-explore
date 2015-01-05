<?php
namespace Controllers;

use Symfony\Component\HttpFoundation\Response;

class MyController {
    function indexAction()
    {
        return $response = new Response(
            'My controller content',
            Response::HTTP_OK,
            array('content-type' => 'text/html')
        );
    }
}
