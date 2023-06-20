<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    #[Route('/api/login', name: 'api_login')]
    public function  login()
    {
        $user = $this->getUser();

        return $this->json(
            [
                'userName'=>$user->getUserIdentifier(),
                'roles'=>$user->getRoles(),
            ]

        );
    }
    #[Route('/security', name: 'app_security',methods: ['POST'])]
    public function index(): Response
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }
}
