<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Ex02Controller extends AbstractController
{
    #[Route('/{_locale}/ex02/{count}', name: 'ex02', requirements: [
        '_locale' => 'en|fr',
        'count' => '[0-9]'
    ], defaults: ['count' => 0])]
    public function translationsAction(int $count = 0): Response
    {
        return $this->render('ex02.html.twig', [
            'number' => $this->getParameter('d07.number'),
            'count' => $count,
        ]);
    }
}