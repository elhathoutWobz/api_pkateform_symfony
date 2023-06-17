<?php
namespace App\Tests\Func;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
abstract class AbstractEndPoint extends  WebTestCase
{
    private array $serverInformation=['ACCEPT'=>'application/json','CONTENT_TYPE'=>'application/json'];
    public  function GetResponseFromRequest(string $method,string $url,string $payload=''): Response
    {
        //create client
        $client= self::createClient();
        //make request
            $client->request(
                $method,
                $url.'.json',
                [],
                [],
                $this->serverInformation,
                $payload
            );

        //return response
       return $client->getResponse();
    }
}