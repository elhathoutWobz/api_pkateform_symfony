<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
abstract class AbstractEndPoint extends  WebTestCase
{
    private array $serverInformation=['ACCEPT'=>'application/json','CONTENT_TYPE'=>'application/json'];
    public  function testGetResponseFromRequest(string $method,string $url,string $payload): Response
    {

        $client= self::createClient();
        $client->request(
            $method,
            $url.'.json',
        [],
            $this->serverInformation,
            $payload
        );


       return $client->getResponse();
    }
}