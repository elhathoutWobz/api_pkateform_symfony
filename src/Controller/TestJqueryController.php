<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestJqueryController extends AbstractController
{
    #[Route('/', name: 'app_test_jquery')]
    public function index(Request $request):Response
    {
        // Retrieve the JSON data from the request
        $jsonData = $request->getContent();

        // Decode the JSON data into a PHP object or array
        $data = json_decode($jsonData, true);

        // Process the data as needed
        // ...

        // Return a response if required
        $response = new Response();
        $response->setContent('Data received successfully');
        $response->headers->set('Content-Type', 'text/plain');
        return $response;

        return $this->render('test_jquery/index.html.twig', [
            'controller_name' => 'TestJqueryController',
        ]);
    }
    #[Route('/form', name: 'form_submit')]
    public function submitForm()
    {
       echo 'hi';
    }

}
