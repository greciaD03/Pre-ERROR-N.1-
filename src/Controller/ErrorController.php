<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends AbstractController
{
    #[Route('/error', name: 'app_error')]
    public function index(): Response
    {
        return $this->render('bundles/TwigBundle/Exception/error404.html.twig', [
            //'controller_name' => 'ErrorController',
        ]);
    }
}

//https://symfony.com/doc/current/controller/error_pages.html

//https://stackoverflow.com/questions/64241732/implement-a-custom-error-controller-in-symfony-4-4
//https://github.com/partkeepr/PartKeepr/issues/1008 
//https://symfony.com/doc/current/service_container/import.html