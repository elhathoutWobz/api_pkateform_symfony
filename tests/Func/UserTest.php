<?php
namespace  App\Tests\Func;


use JetBrains\PhpStorm\NoReturn;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

class UserTest extends  WebTestCase
{
     public  function testGetUsers(): void
    {

        $client= self::createClient();
        $client->request(Request::METHOD_GET,'/api/users.json');
       dd($client->getResponse());
    }
}