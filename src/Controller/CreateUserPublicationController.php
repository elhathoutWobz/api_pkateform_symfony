<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateUserPublicationController extends AbstractController
{
    public function __construct(
        private UserPublicationControllerHandller $controllerHandller)
    {
    }
    public function __invoke(User $user):User
    {
       $this->controllerHandller->handle($user);
       return $user;

        // TODO: Implement __invoke() method.
    }

    #[Route('/create/user/publication', name: 'app_create_user_publication')]
    public function index(): Response
    {
        return $this->render('create_user_publication/index.html.twig', [
            'controller_name' => 'CreateUserPublicationController',
        ]);
    }
}
