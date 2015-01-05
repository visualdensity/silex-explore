<?php
namespace Controllers;

use Symfony\Component\HttpFoundation\Response;

class DefaultController {
    function indexAction()
    {
        return $response = new Response(
            'Form here',
            Response::HTTP_OK,
            array('content-type' => 'text/html')
        );
    }
}
