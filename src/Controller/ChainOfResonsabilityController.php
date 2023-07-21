<?php

namespace App\Controller;

use App\Behavioral\ChainOfResponsability\AzizHandler;
use App\Behavioral\ChainOfResponsability\BenHandler;
use App\Behavioral\ChainOfResponsability\KarimHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChainOfResonsabilityController extends AbstractController
{


    #[Route('/chain-responsability', name: '')]
    public function index(): \App\Behavioral\ChainOfResponsability\Request
    {
        $request = new \App\Behavioral\ChainOfResponsability\Request();
        $request->setPriority(1);

        $azize = new AzizHandler();
        $karim = new KarimHandler();
        $ben = new BenHandler();
        $karim->setNext($azize);
        $ben->setNext($karim);



        $response = $ben->handle($request);



         dd($response);

    }
}