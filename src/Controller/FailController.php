<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FailController extends AbstractController
{
    #[Route('/fail', name: 'app_fail')]
    public function index(): Response
    {
        return $this->render('fail/index.html.twig', [
            'page_error' => 'ERROR: [404]',
            'context' => 'Esta pagina no se encuentra disponible en estos momentos. Se ha encontrado fallas en la ruta. Revise su guia correcta o regrese al:',
        ]);
    }
}