<?php
namespace Demo\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class MyController
{
    protected $repo;

    public function indexAction()
    {
        print_r('har har har, hu hu hu');
        die;
        //return new JsonResponse($this->repo->findAll());
    }
}
