<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstConntrollerController extends AbstractController
{
    #[Route('/first', name: 'app_first_conntroller')]
    public function index()
    {
        return new Response('<h1>Hello motherF </h1>');
    }

    #[Route('/param/{name}', name: 'param')]
    public function param($name)
    {
        return new Response("<h1>Hello motherF $name </h1>");
    }



}
